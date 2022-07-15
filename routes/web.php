<?php

use App\Http\Controllers\Admin\carcontroller;
use App\Http\Controllers\Admin\CatrgoryController;
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


Route::prefix('admin')->group(function ()  {


 Route::get('cars/store',[carcontroller::class,'store'])->name('storeCar');
 Route::get('cars/index',[carcontroller::class,'index'])->name('indexcar');
 Route::get('cars/show',[carcontroller::class,'show'])->name('showcar');
 Route::get('cars/{car}/edit',[carcontroller::class,'edit'])->name('editcar');
 Route::put('cars/{car}',[carcontroller::class,'update'])->name('updatecar');
 Route::delete('cars/{car}',[carcontroller::class,'destroy'])->name('destroy');
 Route::get('cars/create',[carcontroller::class,'create'])->name('createCar');



});

Route::get('/admin/CatrgoryController/store',[CatrgoryController::class,'store'])->name('CatrgoryController.store');

Route::get('/admin/CatrgoryController/index',[CatrgoryController::class,'index'])->name('CatrgoryController.index');

Route::get('/admin/CatrgoryController/create',[CatrgoryController::class,'create'])->name('CatrgoryController.create');
