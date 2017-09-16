<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth; 
use Modules\Admin\Models\User;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Product;
use Modules\Admin\Models\Transaction;
use View;
use Html;
use URL; 
use Validator; 
use Paginate;
use Grids; 
use Form;
use Hash; 
use Lang;
use Session;
use DB;
use Route;
use Crypt;
use Redirect;
use Cart;
use Input;
use App\Helpers\Helper as Helper;
use Modules\Admin\Models\Settings;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     

      public function __construct(Request $request,Settings $setting) { 
         
        View::share('category_name',$request->segment(2));
        View::share('total_item',Cart::content()->count());
        View::share('sub_total',Cart::subtotal()); 
        View::share('userData',$request->session()->get('current_user'));
        View::share('pathinfo',ltrim($request->getPathinfo(),'/'));
        $hot_products   = Product::orderBy('views','desc')->limit(3)->get();
        $special_deals  = Product::orderBy('discount','desc')->limit(3)->get(); 
        View::share('hot_products',$hot_products);
        View::share('special_deals',$special_deals);  

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');  
        $html =  Category::renderAsHtml(); 
        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown();
          return view('category',compact('categories','html')); 
    } 
    public function category(Request $request)
    {
        $btn = $request->get('submit_btn');
        if($btn=="Add Category")
        {
            $name = $request->get('sub_cat');
            $slug = str_slug($request->get('sub_cat'));
            $parent_id = 0;
            $cat = new Category;
            $cat->name = title_case($request->get('sub_cat'));
            $cat->slug = strtolower(str_slug($request->get('sub_cat')));
            $cat->parent_id = $request->get('categories');
            $cat->save();            
        }
        if($btn=="Add Sub Category")
        {
            $name = $request->get('sub_cat');
            $slug = str_slug($request->get('sub_cat'));
            $parent_id = $request->get('categories');

            $cat = new Category;

            $cat->name = title_case($request->get('sub_cat'));
            $cat->slug = strtolower(str_slug($request->get('sub_cat')));
            $cat->parent_id = $request->get('categories');

            $cat->save();
        }
        $categories =  Category::attr(['name' => 'categories'])
                        ->selected([3])
                        ->renderAsDropdown(); 
       $html =  Category::renderAsHtml();  
       return view('category',compact('categories','html')); 
  
    } 
    public function home()
    {
         return view('site.home');
    }
 
    public function checkout()
    {
        $request = new Request; 
        $products = Product::with('category')->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 
        return view('end-user.checkout',compact('categories','products','category'));   
    }
 
    public function productCategory( $category=null, $name=null,$id=null)
    { 
         $request = new Request;
         $q = Input::get('q');  
        $products = Product::with('category')->where('product_category',$name)->orderBy('id','asc')->get();
        if($products->count()==0)
        {
             $cat =  Category::where('parent_id',$name)->get(['id']);

             foreach ($cat as $key => $value) {
               $id[] = $value->id;
             }

              $products = Product::with('category')->whereIn('product_category',$id) 
                            ->orderBy('id','asc')
                            ->get();
             if($q)
             {
                $products = Product::with('category')->whereIn('product_category',$id)
                            ->where('product_title','LIKE','%'.$q.'%')
                            ->orderBy('id','asc')
                            ->get();
       
             }

             
        } 
        $categories = Category::nested()->get(); 
        return view('end-user.category',compact('categories','products','category','q','category'));   
    } 
    public function productDetail($id=null)
    {   
        
        $product = Product::with('category')->where('id',$id)->first();
        $categories = Category::nested()->get();  
        
        if($product==null)
        {
             $url =  URL::previous().'?error=InvaliAcess'; 
              return Redirect::to($url);
        }else{
          $product->views=$product->views+1;
          $product->save(); 
        }
         
        return view('end-user.product-details',compact('categories','product')); 
    } 
    public function order(Request $request)
    { 
        $cart = Cart::content();
        $products = Product::with('category')->orderBy('id','asc')->get();
        $categories = Category::nested()->get(); 
        return view('end-user.order',compact('categories','products','category','cart'));    
    }
     
    public function faq()
    {
        //$products = Product::with('category')->orderBy('id','asc')->get();
       // $categories = Category::nested()->get();  
        return view('site.faq');   
    }
    public function about()
    { 
        return view('site.about');   
    }
    public function contact()
    {
        return view('site.contact');   
    }
     public function businessPlan()
    {
        return view('site.business-plan');   
    }
     public function joinUs()
    {
        return view('site.join-us');   
    }
     public function legal()
    {
        return view('site.legal');   
    }
     public function gallery()
    {
        return view('site.gallery');   
    }
    public function banker()
    {
        return view('site.banker');   
    }
    public function resetPassword()
    {
        return view('site.reset');   
    }
    public function thankYou()
    {
        return view('site.thanku');   
    }
    
    
    
    
     /*----------*/
     public function tNc()
    { 
        return view('site.terms-conditions');   
    }
    
    
}
