<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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
Route::get('/',[Homecontroller::class,'index']);

Route::get('/redirect',[Homecontroller::class,'redirects']);
Route::post('/addcart/{id}',[Homecontroller::class,'addcart']);
Route::get('/showcart/{id}',[Homecontroller::class,'showcart']);
Route::get('/removecart/{id}',[Homecontroller::class,'removecart']);
Route::post('/orderconfirm',[Homecontroller::class,'orderconfirm']);
Route::get('/users',[adminController::class,'index']);
Route::get('/foodmenu',[adminController::class,'foodmenu']);
Route::POST('/insertfood',[adminController::class,'insertfood']);
Route::get('/deletefood/{id}',[adminController::class,'deletefood']);
Route::get('/updatefood/{id}',[adminController::class,'update']);
Route::post('/update/{id}',[adminController::class,'updatefood']);
Route::get('/tablereservations',[adminController::class,'tablereservation']);
Route::post('/reservations',[adminController::class,'reservation']);
Route::get('/chef',[adminController::class,'getchef']);
Route::post('/insertchef',[adminController::class,'insertchef']);
Route::get('/deletechef/{id}',[adminController::class,'deletechef']);
Route::get('/updatechef/{id}',[adminController::class,'updatechef']);
Route::post('/chefupdate/{id}',[adminController::class,'chefupdate']);
Route::get('/deleteusers/{id}',[adminController::class,'deleteuser']);

Route::get('/orders',[adminController::class,'orders']);
Route::get('/deleteorders/{id}',[adminController::class,'deleteorders']);
Route::get('/search',[adminController::class,'search']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
