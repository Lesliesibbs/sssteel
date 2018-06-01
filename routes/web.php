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
/*
Route::get('/test', function () {
    return SSSTEELE\Profile::find(1)->user;
});
*/

Route::get('/', function () {
    return view('index');
  });

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::get('/packages', 'PackagesController@index');

Route::get('/profile', 'ProfileController@index');

Auth::routes();




Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function(){

  Route::get('/tasks', [
    'uses' => 'TasksController@index',
    'as' => 'tasks'
  ]);

  Route::get('/tasks/create', [
    'uses' => 'TasksController@create',
    'as' => 'tasks.create'
  ]);

  Route::post('/tasks/store', [
    'uses' => 'TasksController@store',
    'as' => 'tasks.store'
  ]);

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

  Route::get('/holidays/delete/{id}', [
    'uses' => 'HolidaysController@destroy',
    'as' => 'holidays.delete'
  ]);

  Route::get('/holidays', [
    'uses' => 'HolidaysController@index',
    'as' => 'holidays'
  ]);
  Route::get('/holidays/trashed', [
    'uses' => 'HolidaysController@trashed',
    'as' => 'holidays.trashed'
  ]);
  Route::get('/holidays/kill/{id}', [
    'uses' => 'HolidaysController@kill',
    'as' => 'holidays.kill'
  ]);
  Route::get('/holidays/restore/{id}', [
    'uses' => 'HolidaysController@restore',
    'as' => 'holidays.restore'
  ]);
  Route::get('/holidays/edit/{id}', [
    'uses' => 'HolidaysController@edit',
    'as' => 'holidays.edit'
  ]);
  Route::post('/holidays/update/{id}', [
    'uses' => 'HolidaysController@update',
    'as' => 'holidays.update'
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

  Route::get('/forms', [
    'uses' => 'FormsController@index',
    'as' => 'forms'
  ]);
  Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'users'
  ]);
  Route::get('/users/create', [
    'uses' => 'UsersController@create',
    'as' => 'users.create'
  ]);
  Route::post('/users/store', [
    'uses' => 'UsersController@store',
    'as' => 'users.store'
  ]);
  Route::get('/users/admin/{id}', [
    'uses' => 'UsersController@admin',
    'as' => 'users.admin'
  ])->middleware('admin');

  Route::get('/users/not-admin/{id}', [
    'uses' => 'UsersController@not_admin',
    'as' => 'users.not.admin'
  ]);

  Route::get('/events', [
    'uses' => 'EventController@index',
    'as' => 'events'
  ]);


  Route::get('pdfview',array('as'=>'pdfview','uses'=>'HolidaysController@pdfview'));
});
