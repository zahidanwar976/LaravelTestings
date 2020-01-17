<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/
/*Route::get('/home', function(){

	return view('pages/index');

});*/
Route::get('/home', 'PagesController@index')->name('home');

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');


// Route::resource('posts','PostController')->names('abc');
Route::resource('posts', 'PostController')->names('post');

/*Route::get('/home', function () {
    // return view('welcome');
    return "Wlcome to Home Page";
});*/
/*Route::get('/about', function(){

	return view('pages/about');

});*/

/*Route::get('/user/{id}/{name}', function($id,$name){
	return 'THis is an id '.$id. ' with user ' .$name;
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
