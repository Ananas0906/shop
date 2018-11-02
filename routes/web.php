<?php



Route::get('/','BaseController@getIndex');
   
Auth::routes();
Route::get('/category/{id}','ProductController@getCategory');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{url}','PageController@getIndex'); //default
