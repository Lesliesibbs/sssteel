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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', function () {
    return view('index');
  });

Route::get('/holidays', 'HolidaysController@index');





Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::get('/packages', 'PackagesController@index');

Route::get('/profile', 'ProfileController@index');

Auth::routes();




Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function(){

  Route::get('/profile', [
    'uses' => 'ProfileController@index',
    'as' => 'profile'
  ]);

  Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
  ]);

  Route::get('/holidays/create', [
    'uses' => 'HolidaysController@create',
    'as' => 'holidays.create'
  ]);

  Route::post('/holidays/store', [
    'uses' => 'HolidaysController@store',
    'as' => 'holidays.store'
  ]);

  Route::get('/packages/create', [
    'uses' => 'PackagesController@create',
    'as' => 'packages.create'
  ]);

  Route::post('/packages/store', [
    'uses' => 'PackagesController@store',
    'as' => 'packages.store'
  ]);

  Route::get('/packages', [
    'uses' => 'PackagesController@index',
    'as' => 'packages'
  ]);

  Route::get('/packages/edit/{id}', [
    'uses' => 'PackagesController@edit',
    'as' => 'packages.edit'
  ]);

  Route::get('/packages/delete/{id}', [
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]),
    'uses' => 'PackagesController@destroy',
    'as' => 'packages.delete'
  ]);

  Route::post('/packages/update/{id}', [
    'uses' => 'PackagesController@update',
    'as' => 'packages.update'
  ]);
});
