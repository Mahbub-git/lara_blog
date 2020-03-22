<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use Image;
class HeaderController extends Controller
{
   public function index(){
   	$headers = Header::all();
   	return view('admin.header-footer.header',['headers'=>$headers]);
   }

   public function saveHeader(Request $request){
   	    $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/logo/';
        $imageUrl = $directory . $imageName;
        Image::make($file)->resize(150,150)->save($imageUrl);

         $header = new Header();

         $header->title = $request->title;

         $header->image = $imageUrl;

         $header->save();

        return back();

   }

   public function editHeader($id){
   	$header = Header::find($id);
   	return view('admin.header-footer.editHeader',['header'=>$header]);
   }

   public function headerUpdate(Request $request){
   	$header = Header::find($request->id);
   	$file = $request->file('image');
   	 
   	 if($file){
   	 	unlink($header->image);
   	 	$imageName = $file->getClientOriginalName();
        $directory = 'admin/logo/';
        $imageUrl = $directory . $imageName;
         Image::make($file)->resize(80,100)->save($imageUrl);
     
         $header->title = $request->title;
         $header->image = $imageUrl;
         $header->save();
   	 }else{
   	 	 $header->title = $request->title;
         $header->save();
   	 }
 return back();

   }
}
