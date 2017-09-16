<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Input;
use Validator;
use Auth;
use Form;
use Hash;
use View;
use URL;
use Route;
use Crypt;
use Response;
use App\User;
use JWTAuth;
use Session; 
use App\Helpers\Helper as Helper;
use Modules\Admin\Models\Settings;


class UserController extends Controller
{

     public function __construct(Request $request,Settings $setting) { 
       
        View::share('userData',$request->session()->get('current_user'));
        View::share('pathinfo',ltrim($request->getPathinfo(),'/')); 
        $website_title      = $setting::where('field_key','website_title')->first();
        $website_email      = $setting::where('field_key','website_email')->first();
        $website_url        = $setting::where('field_key','website_url')->first();
        $contact_number     = $setting::where('field_key','contact_number')->first();
        $company_address    = $setting::where('field_key','company_address')->first(); 
        $banner             = $setting::where('field_key','LIKE','%banner_image%')->get(); 
         View::share('website_title',$website_title);
         View::share('website_email',$website_email);
         View::share('website_url',$website_url);
         View::share('contact_number',$contact_number);
         View::share('company_address',$company_address);
         View::share('banner',$banner); 
      // dd(Route::currentRouteName());

    }
    
    /* @method : login
    * @param : email,password and deviceID
    * Response : json
    * Return : token and user details
    * Author : kundan Roy   
    */
    public function login(Request $request)
    {    
        $input = $request->all();
        if (!Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) {
            return response()->json([ "status"=>0,"message"=>"Invalid email or password. Try again!" ,'data' => '' ]);
        }
        $data = Auth::user();
        return Redirect::to('/');
    } 

    public function signup(Request $request,User $user)
    {   
        $input['first_name'] 	= $request->input('first_name');
    	$input['email'] 		= $request->input('email'); 
    	$input['password'] 	    = Hash::make($request->input('password'));
    	

        //Server side valiation
        $validator = Validator::make($request->all(), [
           	'first_name'		=> 	'required',
                'email'     =>  'required|email|unique:users',
	        'password' => 'required|min:6',
	        'confirm_password' => 'required|same:password'
        ]);
        /** Return Error Message **/
        if ($validator->fails()) {
                   	$error_msg	=	[];
	        foreach ( $validator->messages()->messages() as $key => $value) {
	        			  $error_msg[$key] = $value[0];
	        		}
	      
          	return Response::json(array(
	          	'status' => 0,
	            'message' => $error_msg,
	            'data'	=>	''
	            )
          	);
        }   
        /** --Create USER-- **/
        $user = User::create($input); 
       
        if($user) 
        {
             $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
        
            if (Auth::attempt($credentials)) {
                 $request->session()->put('current_user',Auth::user());
                 $request->session()->put('tab',1);
                    return response()->json(
                            [ 
                                "status"=>1,
                                "code" => 200,
                                "message"=>"Thank you for registration.",
                                'data'=>$user
                            ]
                        );
              }  
        } 
    }

    public function userSignup(Request $request,User $user)
    {   
        $input['first_name']    = $request->input('first_name');
        $input['email']         = $request->input('email'); 
        $input['password']      = Hash::make($request->input('password'));
        

        //Server side valiation
        $validator = Validator::make($request->all(), [
            'first_name'        =>  'required',
            'email'     =>  'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        /** Return Error Message **/
        if ($validator->fails()) {
                    $error_msg  =   [];
            foreach ( $validator->messages()->messages() as $key => $value) {
                          $error_msg[$key] = $value[0];
                    }
          
              return redirect()
                          ->back()
                          ->withInput()  
                          ->withErrors(['message'=>$error_msg]);
        }else{
                $user = User::create($input); 
       
                $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
            
                if (Auth::attempt($credentials)) {
                     $request->session()->put('current_user',Auth::user()); 
                     return redirect()
                          ->back()
                          ->withInput()  
                          ->withErrors(['message'=>'success']);
                        
                  }  
            }  
        
    }
    
    public function register(Request $request)
    {  
        return view('auth.register');
    }

    public function showLoginForm(Request $request)
    {  
        return view('site.login');
    }
}