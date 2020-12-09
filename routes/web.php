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

Route::get('/admin','Dashboard@index');

Route::get('/admin/admission', function () {
    //return view('welcome');
    
    return view('backend.admin.students.admission');
});

Route::get('/admin/room', 'RoomController@index');
Route::post('/room/add', 'RoomController@add');



Route::get('/student', function () {
    //return view('welcome');
    
    return view('backend.students.st_dashboard');
});

Route::get('/employee', function () {
    //return view('welcome');
    
    return view('backend.employee.em_dashboard');
});

Route::get('/home', function () {
    //return view('welcome');
    
    return view('frontend.pages.home');
});
Route::get('/', function () {
    //return view('welcome');
    
    return view('frontend.pages.home');
});


Route::get('/single', function () {
    //return view('welcome');
    
    return view('frontend.pages.single');
});

Route::get('/register', function () {
    //return view('welcome');
    
    return view('frontend.pages.register');
});

Route::get('/seatalocation', 'StudentController@seat_aloc');
Route::post('/seatalocation/store', 'StudentController@seat_aloc_store');