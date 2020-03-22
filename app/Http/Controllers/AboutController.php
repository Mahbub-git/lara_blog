<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
   public function index(){
   	$abouts = About::all();
   	 return view('admin.header-footer.about-list',['abouts'=>$abouts]);
   }

   public function aboutSave(Request $request){
   	$about_us = new About();
 	$about_us->com_title = $request->com_title;
    $about_us->com_name = $request->com_name;
    $about_us->com_mission = $request->com_mission;
    $about_us->short_desc = $request->short_desc;
    $about_us->long_desc = $request->long_desc;

    $about_us->save();
    return back();
      
   }
}
