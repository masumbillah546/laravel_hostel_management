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
Route::get('/meal/view','MealController@index');

//Cost//
Route::view('/cost/add','backend.admin.cost.add');
Route::post('/cost/store','CostController@store');
Route::view('/cost/edit','backend.admin.cost.edit');
Route::get('/cost/view','CostController@index');

//Student Manage
Route::view('/student/admission','backend.admin.students.admission');
Route::get('/student/list','StudentController@index');
Route::get('/student/deposit','StudentController@deposit');
Route::get('/student/profile/{userId}','StudentController@show');
Route::get('/seatalocation', 'StudentController@seat_aloc');
Route::post('/seatalocation/store', 'StudentController@seat_aloc_store');

//payment
Route::view('/payment/add','backend.admin.payment.add');
Route::post('/payment/store','Payment@store');
Route::get('/payment/approval','Payment@approval');
Route::get('/payment/view','Payment@index');
Route::get('/payment/{serial}','Payment@update');

//Notice
Route::get('/notice/add','Notice@create');
Route::post('/notice','Notice@store');
// Route::post('/notice','Notice@index');

//Employee
Route::view('/employee/add','backend.admin.employee.add');
Route::view('/employee/list','backend.admin.employee.list');
Route::view('/employee/addsalary','backend.admin.employee.addsalary');
Route::view('/employee/viewsalary','backend.admin.employee.viewsalary');

//Vendor
Route::view('/vendor/add','backend.admin.vendor.add');
Route::post('/vendor/store','VendorController@store');
Route::get('/vendor/view','VendorController@index');

//Bill
Route::get('/bill/add','BillController@create');
Route::post('/bill/store','BillController@store');
Route::get('/bill/view','BillController@index');

//Setting
Route::get('/setting/adduser','SettingController@index');

//Setup
Route::get('/setup/fees', 'SetupController@fees');
Route::get('/setup/mealrate', 'SetupController@mealRate');
Route::get('/setup/timeset', 'SetupController@timeset');
Route::get('/setup/block', 'SetupController@block');
Route::get('/admin/room', 'RoomController@index');
Route::post('/room/add', 'RoomController@add');









    
Route::view('/student','backend.students.st_dashboard');

//payment
Route::view('/stpayment/add','backend.students.payment.add');
//Route::view('/payment/approval','backend.admin.payment.approval');
//Route::get('/payment/view','Payment@index');











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

