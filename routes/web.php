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
// Auth::routes();
// Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
// 
// 
// 
 
Route::group(['middleware'=>['auth']],function(){



Route::get('/admin','Dashboard@index');


//attendence//
Route::get('/attendence/add','AttendenceController@add');
Route::post('/attendence/store','AttendenceController@store');
Route::get('/attendence/list','AttendenceController@index');
Route::get('/attendence/view','AttendenceController@show');

//Meal//
Route::get('/meal/add','MealController@add');
Route::post('/meal/store','MealController@store');
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
Route::post('/deposit/store','StudentController@depositStore');
Route::get('/student/profile/{userId}','StudentController@show');
Route::get('/seatalocation', 'StudentController@seat_aloc');
Route::post('/seatalocation/store', 'StudentController@seat_aloc_store');

//payment
Route::view('/payment/add','backend.admin.payment.add');
Route::post('/payment/store','Payment@store');
Route::get('/payment/approval','Payment@approval');
// Route::get('/payment/view','Payment@index');
Route::get('/payment/view','Payment@show');
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
Route::post('/mealrate/update', 'SetupController@update');
Route::get('/setup/mealrate', 'SetupController@mealRate');
Route::get('/setup/timeset', 'SetupController@timeset');
Route::post('/time/update', 'SetupController@timeUpdate');
Route::get('/setup/block', 'SetupController@block');
Route::get('/admin/room', 'RoomController@index');
Route::post('/room/add', 'RoomController@add');

 });







  Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin','Dashboard@index');
 
// Student dashboard
Route::group([],function(){

Route::get('/student', 'SdashboardController@index');
Route::get('/stprofile', 'SdashboardController@profile_view');
Route::view('/stattendence/add','backend.students.payment.add');
Route::get('/stattendence/view','SdashboardController@att_view');
Route::get('/stpayment/add','SdashboardController@padd');
Route::post('/stpayment/store','SdashboardController@store');
Route::get('/stpayment/view','SdashboardController@payment_view');
Route::get('/stpayment/pdf','SdashboardController@pdf');
Route::get('/stbill/view','SdashboardController@bill_view');
// Route::get('/payment/view','Payment@index');

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

Route::view('/admission','frontend.pages.register');
Route::post('/admission/store','AdmissionController@store');







    
Route::get('/login2','MainController@index');
Route::post('/lin','MainController@login');
Route::post('/lout','MainController@logout');

