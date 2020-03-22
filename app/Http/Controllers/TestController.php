<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
   public function index(){
   	$countries = Test::all();
   	return view('admin.test.test',['countries'=>$countries]);
   }
}
