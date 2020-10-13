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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/customer', 'EcomerceController@login')->name('login.ecom');
	Route::get('contact/customer', 'EcomerceController@contact')->name('contact.ecom');
	Route::get('about/customer', 'EcomerceController@about')->name('about.ecom');
	Route::get('deals/customer', 'EcomerceController@deals')->name('deals.ecom');
Route::group(['as'=>'admin.','middleware'=>['auth','admin'], 'prefix' => 'admin'],function(){
	Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
	Route::view('product/extras', 'admin.partials.extras')->name('product.extras');

	Route::view('profile/roles', 'admin.partials.extras')->name('profile.extras');

	Route::get('profile/states/{id?}', 'ProfileController@getStates')->name('profile.states');
	Route::get('profile/cities/{id?}', 'ProfileController@getCities')->name('profile.cities');



	
	Route::resource('/product','ProductController');
	Route::resource('/category','CategoryController');
	Route::resource('/profile','ProfileController');
});
