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

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
// Route::get('/clubs','ClubsController@index');
// Route::get('/shops','ShopsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//
Route::resource('/shops', 'ShopsController');
//
Route::resource('/clubs', 'ClubsController');





