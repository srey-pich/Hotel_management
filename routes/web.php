<?php
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Homecontroller::class,'home']);
Route::get('/service/{id}',[Homecontroller::class,'Service_detail']);
Route::get('page/about-us',[Pagecontroller::class,'about_us']);
Route::get('page/contact-us',[Pagecontroller::class,'contact_us']);
// Route::get('/admin', function () {
//     return view('deshbord');
// });
Route::get('/admin',[AdminController::class,'deshbord']);

//AdminDashborad
Route::get('admin/login',[AdminController::class,'deshbord']);
//admin login
Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login',[AdminController::class,'check_login']);
Route::get('admin/logout',[AdminController::class,'logout']);
//Room route
Route::get('admin/room/{id}/delete',[RoomController::class,'destroy']);
Route::resource('/admin/room',RoomController::class);

//Roomtype route
Route::get('admin/roomtype/{id}/delete',[RoomtypeController::class,'destroy']);
Route::resource('/admin/roomtype',RoomtypeController::class);

//Cust route
Route::get('admin/customer/{id}/delete',[CustomerController::class,'destroy']);
Route::resource('/admin/customer',CustomerController::class);

//roomimageID
Route::get('admin/roomtypeimage/delete/{id}',[RoomtypeController::class,'destroy_image']);

//department
Route::get('admin/department/{id}/delete',[StaffDepartment::class,'destroy']);
Route::resource('admin/department', StaffDepartment::class);

//Staff
Route::get('admin/staff/{id}/delete',[StaffController::class,'destroy']);
Route::resource('admin/staff',StaffController::class);
//staffpayment
Route::get('admin/staff/payment/{id}/add', [StaffDepartment::class,'all_payment']);
Route::get('admin/staff/payment/{id}/add', [StaffDepartment::class,'add_payment']);
Route::post('admin/staff/payment/', [StaffDepartment::class,'save_payment']);
//Booking
Route::get('admin/booking/{id}/delete', [BookingController::class,'destroy']);
Route::get('admin/booking/available_rooms', [BookingController::class,'available_rooms']);
Route::resource('/admin/booking',BookingController::class);

Route::get('login',[CustomerController::class,'login']);
Route::post('customer/login',[CustomerController::class,'customer_login']);
Route::get('register',[CustomerController::class,'register']);
Route::get('logout',[CustomerController::class,'logout']);

Route::get('booking',[BookingController::class,'front_booking']);

//service crud
Route::get('admin/services/{id}/delete',[ServiceController::class,'destroy']);
Route::resource('admin/services',ServiceController::class);

Route::get('customer/add-testimonial',[HomeController::class,'add_testimonial']);
Route::post('customer/save-testimonial',[HomeController::class,'save_testimonial']);
Route::get('admin/testimonial/{id}',[AdminController::class,'destroy_testimonial']);
Route::get('admin/testimonials',[AdminController::class,'testimonial']);
Route::post('save-contactus',[Pagecontroller::class,'save_contactus']);

Route::get('admin/banner/{id}/delete',[BannerController::class,'destroy']);
Route::resource('admin/banner',BannerController::class);

