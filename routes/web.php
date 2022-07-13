<?php

use App\Http\Controllers\Admin\carcontroller;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\MessageController;


use Illuminate\Support\Facades\Route;


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

Route::get('/home', [HomePage::class ,'home'])->name('home');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-my',[MessageController::class,'store'])->name('contact-my');
Route::get('/admin-message',[MessageController::class,'messageall'])->name('message-admin');
Route::get('admin-message/{message:name}', [MessageController::class,'show'])->name('message-show');

Route::get('/admin/cars/create',[carcontroller::class,'create'])->name('createCar');
Route::get('/admin/cars/store',[carcontroller::class,'store'])->name('storeCar');
Route::get('/admin/cars/index',[carController::class,'index'])->name('indexcar');
Route::get('/admin/cars/show',[carController::class,'show'])->name('showcar');
Route::get('/admin/cars/{car}/edit',[carController::class,'edit'])->name('editcar');
Route::put('/admin/cars/{car}',[carController::class,'update'])->name('updatecar');
Route::delete('/admin/cars/{car}',[carController::class,'destroy'])->name('destroy');
