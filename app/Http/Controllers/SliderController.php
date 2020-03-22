<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
class SliderController extends Controller
{
   public function index()
   {
   	$sliders = Slider::all();
   	return view('admin.slider.slider-list',['sliders'=>$sliders]);
   }

   public function sliderSave(Request $request)
   {
   	$request->validate([
        'slider_image' => 'required'
    ]);

    $file = $request->file('slider_image');
    $imageName = $file->getClientOriginalName();
    $directory = 'admin/slider-image/';
    $imageUrl = $directory . $imageName;
    Image::make($file)->resize(960,360)->save($imageUrl);

    $slider = new Slider();
    $slider->slider_image = $imageUrl;
    $slider->save();

    return back();
   }

   public function sliderUnpublished($id)
   {
   	$slider = Slider::find($id);
    $slider->status = 0;
    $slider->save();
    return back();
   }

    public function sliderPublished($id)
   {
   	$slider = Slider::find($id);
   	 $slider->status = 1;
    $slider->save();
    return back();
   }

    public function sliderDelete($id)
   {
   	$slider = Slider::find($id);
    $slider->delete();
    return back();
   }

  public function sliderUpdate(Request $request)
  {
  		$slider = Slider::find($request->id);
  		$file = $request->file('slider_image');
  		$imageName = $file->getClientOriginalName();
	    $directory = 'admin/slider-image/';
	    $imageUrl = $directory . $imageName;
	    Image::make($file)->resize(960,360)->save($imageUrl);

	     $slider->slider_image = $imageUrl;
		 $slider->save();

		 return back();

  }
}
