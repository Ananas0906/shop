<?php



Route::get('/','BaseController@getIndex');
   
Auth::routes();
Route::get('/category/{id}','ProductController@getCategory');
Route::get('/product/{id}','ProductController@GetOne');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{url}','PageController@getIndex'); //default
