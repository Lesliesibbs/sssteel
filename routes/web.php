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

  Route::get('/check_in/create', [
    'uses' => 'CheckInController@create',
    'as' => 'check_in.create'
  ]);

  Route::post('/check_in/store', [
    'uses' => 'CheckInController@store',
    'as' => 'check_in.store'
  ]);

  Route::get('/check_in', [
    'uses' => 'CheckInController@index',
    'as' => 'check_in'
  ]);

  Route::get('/check_in/edit/{id}', [
    'uses' => 'Check_InController@edit',
    'as' => 'check_in.edit'
  ]);

  Route::get('/check_in/delete/{id}', [
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]),
    'uses' => 'CheckInController@destroy',
    'as' => 'check_in.delete'
  ]);

  Route::post('/check_in/update/{id}', [
    'uses' => 'CheckInController@update',
    'as' => 'check_in.update'
  ]);

  Route::get('/check_out/create', [
    'uses' => 'CheckOutController@create',
    'as' => 'check_out.create'
  ]);

  Route::post('/check_out/store', [
    'uses' => 'CheckOutController@store',
    'as' => 'check_out.store'
  ]);

  Route::get('/check_out', [
    'uses' => 'CheckOutController@index',
    'as' => 'check_out'
  ]);

  Route::get('/check_out/edit/{id}', [
    'uses' => 'PackagesController@edit',
    'as' => 'check_out.edit'
  ]);

  Route::get('/check_out/delete/{id}', [
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]),
    'uses' => 'Check_OutController@destroy',
    'as' => 'check_out.delete'
  ]);

  Route::post('/check_out/update/{id}', [
    'uses' => 'Check_OutController@update',
    'as' => 'check_out.update'
  ]);

  Route::get('/inventory/create', [
    'uses' => 'InventoryController@create',
    'as' => 'inventory.create'
  ]);

  Route::post('/inventory/store', [
    'uses' => 'InventoryController@store',
    'as' => 'inventory.store'
  ]);

  Route::get('/inventory', [
    'uses' => 'InventoryController@index',
    'as' => 'inventory'
  ]);

  Route::get('/inventory/edit/{id}', [
    'uses' => 'InventoryController@edit',
    'as' => 'inventory.edit'
  ]);

  Route::get('/inventory/delete/{id}', [
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]),
    'uses' => 'InventoryController@destroy',
    'as' => 'inventory.delete'
  ]);

  Route::post('/inventory/update/{id}', [
    'uses' => 'InventoryController@update',
    'as' => 'inventory.update'
  ]);

Route::get('/term/create', [
    'uses' => 'TermController@create',
    'as' => 'term.create'
  ]);

  Route::post('/term/store', [
    'uses' => 'TermController@store',
    'as' => 'term.store'
  ]);

  Route::get('/term', [
    'uses' => 'TermController@index',
    'as' => 'term'
  ]);

  Route::get('/term/edit/{id}', [
    'uses' => 'TermController@edit',
    'as' => 'term.edit'
  ]);

  Route::get('/term/delete/{id}', [
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]),
    'uses' => 'TermController@destroy',
    'as' => 'term.delete'
  ]);

  Route::post('/term/update/{id}', [
    'uses' => 'TermController@update',
    'as' => 'term.update'
  ]);

Route::get('/email',[
  'uses' => 'EmailController@index',
  'as' => 'email'
]);

Route::get('/calendar',[
  'uses' => 'CalenderController@index',
  'as' => 'calendar'
]);

  Route::get('pdfview',array('as'=>'pdfview','uses'=>'HolidaysController@pdfview'));
});
