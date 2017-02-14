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

/*route for target page*/
Route::get('/', function () {
    return view('kkt');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/signup', function () {
    return view('auth.signup');
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

Route::get('/employees', function () {
    return view('kkt.kakitangan.testemploy');
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
