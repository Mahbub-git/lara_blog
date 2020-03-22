<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Header;
use DB;
use App\Category;
use App\Blog;
class WelcomeController extends Controller
{
     public function index(){
     
     $blogs = DB::table('blogs')
    			->join('categories','categories.id','=','blogs.category_id')
                ->select('blogs.*','categories.cat_name')
                ->take(2)
                ->orderBy('blog_id','DESC')
                ->get();
      return view('front-end.pages.home',[
      	'blogs'=>$blogs
      ]);   
    }

    

    public function viewBlogDetails($id){
      $blog = Blog::find($id);
       return view('front-end.pages.blog-details',[
        'blog'=>$blog
      ]); 
    }

    public function viewCategoryWiseBlog($id){
    $categories_blog = DB::table('Blogs')->where('status', 1)->where('category_id', $id)->orderBy('blog_id', 'desc')->get();
    //return $categories_blog;
      return view('front-end.pages.blog-category',[
        'categories_blog'=>$categories_blog
      ]); 
    }

    public function aboutUs(){
       return view('front-end.pages.about-us');
    }

    public function contact(){
       return view('front-end.pages.contact');
    }
}
