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

Route::get('/', 'IndexController@index');

// Route::get('/{user}', function () {
//     return view('pages.index', ['users'=>$user]);
// })->name('redirectIndex');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('showMap/{review_layanan}', 'ServiceViewController@index')->name('showMap');

Route::get('showAddReview/{review_layanan}', 'ReviewController@create')->name('showAddReview');
Route::post('addReview', 'ReviewController@store')->name('addReview');
Route::post('searchReview', 'ReviewController@search')->name('searchReview');
Route::get('listReview/', 'ReviewController@index')->name('listReview');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
Auth::routes();

Route::get('/news', 'NewsController@index');
Route::get('/weather', 'WeatherController@index');
