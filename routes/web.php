<?php

//add use of any file that relevant to content up here
use App\Role;
use App\User;
use Illuminate\Http\Request;

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

/*route for target page*/
Route::get('/', function () {
    return view('kkt');
});

//Here example of content function to aid for current function that dont have view
Route::get('/signup', function () {
	$roles = Role::all();
    return view('auth.signup',compact('roles'));
});

Route::get('/signup2', function () {
	$roles = Role::all();
    return view('kkt.kakitangan.signup',compact('roles'));
});

Route::get('/register2', function () {
    return view('auth.registerOri');
});

Route::get('/about', function () {
    return view('kkt2');
});

Route::get('/kktdashboard', function () {
    return view('kkt.kakitangan.dashboard');
});

Route::get('/leave/calendar', function () {
    return view('kkt.kakitangan.leave.calendar');
});

Route::get('/dashboard', function () {
    return view('layouts.kktinner');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/getUser', 'UserController@getUser');
Route::get('/aggregate', 'UserController@aggregate');
Route::get('/join', 'UserController@join');
Route::get('/union', 'UserController@union');
Route::get('/getRole', 'ModelController@getRole');
Route::get('/insert', 'ModelController@insert');
Route::get('/update', 'ModelController@update');
Route::get('/updateOrCreate', 'ModelController@updateOrCreate');
Route::get('/pagination', 'PaginationController@pagination');
Route::get('/getInsert', 'CrudController@getInsert');
Route::post('/postInsert', 'CrudController@postInsert');
Route::get('/getUpdate/{id}', 'CrudController@getUpdate');
Route::post('/postUpdate/{id}', 'CrudController@postUpdate');
Route::get('/postDelete/{id}', 'CrudController@postDelete');
//post for pass data, get for create/destroy data
// Use {} to declare an id
Route::get('/getUser/{id}', 'UserController@getUser');

//----//
Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');

//--Crud Ajax--//
Route::get('/employees', 'CrudAjaxController@index');
Route::post('/create', 'CrudAjaxController@create');
Route::get('/edit/{user_id?}', 'CrudAjaxController@edit');
Route::put('/update/{user_id?}', 'CrudAjaxController@update');
Route::delete('/delete/{user_id?}', 'CrudAjaxController@delete');

Route::get('laravel-ajax-pagination',array('as'=>'ajax-pagination','uses'=>'FileController@productList'));

// Datatable CRUD AJAX
Route::get('datatable','DatatablesController@getIndex');
// uses of 'as=>' is important when want to use inside ajax 
Route::get('datatable/getIndexData','DatatablesController@getIndexData');
Route::post('/creating', 'DatatablesController@create');
Route::get('/editing/{user_id?}', 'DatatablesController@edit');
Route::put('/updating/{user_id?}', 'DatatablesController@update');
Route::delete('/remove/{user_id?}', 'DatatablesController@delete');