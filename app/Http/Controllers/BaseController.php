<?php

namespace App\Http\Controllers;

use App\Product;

class BaseController extends Controller
{public function getIndex (){
	$products=Product::all()->random(6);
return view ('welcome',compact('products'));}
}
