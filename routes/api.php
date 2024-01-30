<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookingController;
use App\Http\Controllers\API\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/booking',BookingController::class)->only('index','show','store','delete');
Route::apiResource('/customer',CustomerController::class);
//Route::post('/customer', 'CustomerController@store');
Route::apiResource('/roomtype',RoomtypeController ::class)->only('index','show','store','delete');

