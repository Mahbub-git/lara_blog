<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
class FooterController extends Controller
{
   public function footerList(){
   	$footer = Footer::all();
   	return view('admin.header-footer.footer',['footer'=>$footer]);
   }

   public function footerUpdate(Request $request){
   	$footer = Footer::find($request->id);
   	$footer->title = $request->title;
   	$footer->save();
   	return back();
   }
}
