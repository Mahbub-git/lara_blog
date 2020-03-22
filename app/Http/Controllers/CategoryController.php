<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use Alert;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.category.category-list',['categories'=>$categories]);
    }

    public function categorySave(Request $request){
    	Category::create($request->all());	
    	return back();
    }

    public function unpublishedcategory($id){
    	$category = Category::find($id);
    	$category->status = 0;
    	$category->save();
    	return back();
    }

    public function publishedcategory($id){
    	$category = Category::find($id);
    	$category->status = 1;
    	$category->save();
    	return back();
    }

     public function categoryUpdate(Request $request){
    	$category = Category::find($request->id);
    	
    	$category->cat_name = $request->cat_name;
    	$category->cat_desc = $request->cat_desc;
    	$category->status = $request->status;

    	$category->save();

    	return back();
    }
    public function deleteCategory($id){
    	$category = Category::find($id);
    	$category->delete();
    	return back();
    }
}
