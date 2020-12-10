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


//attendence//
Route::view('/attendence/add','backend.admin.attendence.add');
Route::view('/attendence/list','backend.admin.attendence.list');
Route::view('/attendence/view','backend.admin.attendence.view');

//Meal//
Route::view('/meal/add','backend.admin.meal.add');
Route::view('/meal/edit','backend.admin.meal.edit');
Route::view('/meal/view','backend.admin.meal.view');

//Cost//
Route::view('/cost/add','backend.admin.cost.add');
Route::view('/cost/edit','backend.admin.cost.edit');
Route::view('/cost/view','backend.admin.cost.view');

//Student Manage
Route::view('/student/admission','backend.admin.students.admission');
Route::view('/student/list','backend.admin.students.list');
Route::view('/student/deposit','backend.admin.students.deposit');
Route::get('/seatalocation', 'StudentController@seat_aloc');
Route::post('/seatalocation/store', 'StudentController@seat_aloc_store');

//payment
Route::view('/payment/add','backend.admin.payment.add');
Route::view('/payment/approval','backend.admin.payment.approval');
Route::view('/payment/view','backend.admin.payment.view');

//Notice
Route::get('/notice/add','Notice@create');
Route::post('/notice','Notice@store');


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

