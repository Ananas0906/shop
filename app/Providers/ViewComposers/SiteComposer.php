<?php
namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Category;
class SiteComposer{ 
public function compose(View $view){
	$v_categories=Category::all();
	
	$view->with('v_categories',$v_categories);
	
	
	
}
}