<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\UserRequest;
use App\User;
use App\ManageLevel;
use Input;
use Validator;
use Auth;
use Paginate;
use Grids;
use HTML;
use Form;
use Hash;
use View;
use URL;
use Lang;
use Session;
use DB;
use Route;
use Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Dispatcher;
use App\Helpers\Helper;

/**
 * Class AdminController
 */
class UsersController extends Controller {
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct() {
        $auth = $this->middleware('admin');
        View::share('viewPage', 'user');
        View::share('helper', new Helper);
        View::share('heading', 'Users');
        View::share('route_url', route('user'));
        View::share('referal_code', 'mw-' . Auth::guard('admin')->user()->id);

        $this->record_per_page = Config::get('app.record_per_page');
    }

    /*
     * Dashboard
     * */

    public function index(User $user, Request $request) {

        $page_title = 'User';
        $page_action = 'View User';
        if ($request->ajax()) {
            $id = $request->get('id');
            $status = $request->get('status');
            $user = User::find($id);
            $s = ($status == 1) ? $status = 0 : $status = 1;
            $user->status = $s;
            $user->save();
            echo $s;
            exit();
        }
        // Search by name ,email and group
        $search = Input::get('search');
        $status = Input::get('status');
        if ((isset($search) && !empty($search)) OR ( isset($status) && !empty($status))) {

            $search = isset($search) ? Input::get('search') : '';

            $users = User::where(function($query) use($search, $status) {
                        if (!empty($search)) {
                            $query->Where('name', 'LIKE', "%$search%")
                                    ->OrWhere('email', 'LIKE', "%$search%");
                        }
                        if (!empty($status)) {
                            $status = ($status == 'active') ? 1 : 0;
                            $query->Where('status', $status);
                        }
                    })->Paginate($this->record_per_page);
        } else {
            $users = User::orderBy('id', 'desc')->Paginate(10);
        }


        $js_file = ['common.js', 'bootbox.js', 'formValidate.js'];
        return view('packages::users.index', compact('js_file', 'roles', 'status', 'users', 'page_title', 'page_action'));
    }

    public function getTree() {
        $page_title = 'User';
        $page_action = 'View User';

        $users = User::where('parent_id', '0')->first();
        if ($users) {
            $adminId = $users->id;
            $allUser = User::where('parent_id', $adminId)->get(['id', 'name']);
        }

        $js_file = ['common.js', 'bootbox.js', 'formValidate.js'];
        return view('packages::users.user.tree', compact('js_file', 'roles', 'status', 'allUser', 'page_title', 'page_action'));
    }

    function getTreeChild(Request $request, $id) {
        $statusArr = array('status' => 200, 'data' => '');
        if ($id) {
            $allUser = User::where('parent_id', $id)->get(['id', 'name']);
            if (count($allUser) > 0) {
                $statusArr = array('status' => 100, 'data' => $allUser);
            }
        }
        return json_encode($statusArr);
    }

    /*
     * create Group method
     * */

    public function create(User $user) {
        $page_title = 'User';
        $page_action = 'Create User';
        $role_id = null;
        $js_file = ['common.js', 'bootbox.js', 'formValidate.js'];
        return view('packages::users.create', compact('js_file', 'role_id', 'roles', 'user', 'page_title', 'page_action', 'groups'));
    }

    /*
     * Save Group method
     * */

    public function store(UserRequest $request, User $user) {

        $level = 1;
        $parent_id = Auth::guard('admin')->user()->id;
        $cname = [];
        while (1) {
            //$data = ManageLevel::where('user_id',$parent_id)->first();
            $data = User::find($parent_id);
            //dd($data);
            if ($data) {
                $level++;
                $parent_id = $data->parent_id;
            } else {
                break;
            }
        }

        $coloumn = \Schema::getColumnListing('users');

        unset($coloumn['0']);
        foreach ($coloumn as $key => $result) {
            $user->$result = $request->get($result);
            if ($result == 'password') {
                $user->$result = Hash::make($request->get($result));
            }
        }

        $user->parent_id = Auth::guard('admin')->user()->id;
        $user->level = $level;
        $user->save();

        /* 	$coloumn = \Schema::getColumnListing('users');

          unset($coloumn['0']);
          foreach ($coloumn as $key => $result) {
          $user->$result  = $request->get($result);
          if($result=='password'){
          $user->$result = Hash::make($request->get($result));
          }

          }

          $user->parent_id = 0
          $user->level = 1;
          $user->save();
         */


        /* 	$ml = new ManageLevel;

          $ml->parent_id = Auth::guard('admin')->user()->id;
          $ml->user_id = $user->id;
          $ml->level = $level;
          $ml->save(); */

        $js_file = ['common.js', 'bootbox.js', 'formValidate.js'];
        return Redirect::to(route('user'))
                        ->with('flash_alert_notice', 'New user  successfully created.');
    }

    /*
     * Edit Group method
     * @param 
     * object : $user
     * */

    public function edit(User $user) {

        $page_title = 'User';
        $page_action = 'Show Users';
        $roles = Roles::all();
        $js_file = ['common.js', 'bootbox.js', 'formValidate.js'];
        return view('packages::users.edit', compact('js_file', 'role_id', 'roles', 'user', 'page_title', 'page_action'));
    }

    public function update(Request $request, User $user) {

        $user->fill(Input::all());
        $user->password = Hash::make($request->get('password'));

        $validator_email = User::where('email', $request->get('email'))
                        ->where('id', '!=', $user->id)->first();
        if ($validator_email) {
            if ($validator_email->id == $user->id) {
                $user->save();
            } else {
                return Redirect::back()->withInput()->with(
                                'field_errors', 'The Email already been taken!'
                );
            }
        } else {
            $user->save();
        }


        return Redirect::to(route('user'))
                        ->with('flash_alert_notice', 'User   successfully updated.');
    }

    /*
     * Delete User
     * @param ID
     * 
     */

    public function destroy(User $user) {

        User::where('id', $user->id)->delete();

        return Redirect::to(route('user'))
                        ->with('flash_alert_notice', 'User  successfully deleted.');
    }

    public function show(User $user) {
        
    }

}
