<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{ public function getCategory($id=null){
	
	$cat=category::find($id);
	return view('products',compact('cat'));
	
}
	 public function getOne($id=null){
	$obj=Product::find($id);
return view('product',compact('obj'));	
		 
		 
		 
	 }
	
    //

}
