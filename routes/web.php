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
// Where it all start
Route::get('/', 'LandingPageController@index');

//Blog Route
Route::get('/blog', 'BlogController@index');
Route::get('/post/{slug}', 'BlogController@show');

//Pages Controller
Route::get('{slug}', 'PagesController@show');
Route::get('contact', 'PagesController@contact');
//Route::get('contact', 'PagesController@contact');


//Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Authentication Route
Auth::routes();

// User redirect home page
Route::get('/home', 'HomeController@index')->name('home');
