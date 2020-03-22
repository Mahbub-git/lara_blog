<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Image;
use DB;
class BlogController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	$blogs = DB::table('blogs')
    			->join('categories','categories.id','=','blogs.category_id')
                ->select('blogs.*','categories.cat_name')
                ->get();
    	return view('admin.blog.blog-list',[
    		'categories'=>$categories,
    		'blogs'=>$blogs,
    	]);
    }

    public function blogsave(Request $request){
    	$file = $request->file('bog_image');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/blog-image/';
        $imageUrl = $directory . $imageName;

        Image::make($file)->resize(620,154)->save($imageUrl);

        $blog = new Blog();

        $blog->blog_title = $request->blog_title;
        $blog->category_id = $request->category_id;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->bog_image = $imageUrl;
        $blog->author_name = $request->author_name;
        $blog->hit_counter = $request->hit_counter;
        $blog->status = $request->status;
        $blog->save();

        return back();

         

    }

    public function blogUnpublished($id){
    	$blog = Blog::find($id);
    	$blog->status = 0;
    	$blog->save();
    	return back();
    }

    public function blogPublished($id){
    	$blog = Blog::find($id);
    	$blog->status = 1;
    	$blog->save();
    	return back();
    }

    public function blogUpdate(Request $request){
    $blog = Blog::find($request->id);
   	$file = $request->file('bog_image');
   	if($file){
   	 	unlink($blog->bog_image);
   	 	 $imageName = $file->getClientOriginalName();
        $directory = 'admin/blog-image/';
        $imageUrl = $directory . $imageName;

        Image::make($file)->resize(620,154)->save($imageUrl);

        $blog->blog_title = $request->blog_title;
        $blog->category_id = $request->category_id;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->bog_image = $imageUrl;
        $blog->author_name = $request->author_name;
        $blog->hit_counter = $request->hit_counter;
        $blog->status = $request->status;
        $blog->save();

   	 }else{
   	 	$blog->blog_title = $request->blog_title;
        $blog->category_id = $request->category_id;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->author_name = $request->author_name;
        $blog->hit_counter = $request->hit_counter;
        $blog->status = $request->status;
        $blog->save();

   	 }
   	 return back();
    }

     public function blogDelete($id){
    	$blog = Blog::find($id);
    	$blog->delete();
    	return back();
    }
}
