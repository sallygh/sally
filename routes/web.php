<?php

use App\Http\Controllers\Admin\carcontroller;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\MessageController;
use App\Models\Messages;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

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

Route::get('admin-message/{message:name}', [MessageController::class,'show'] )->name('message-show');

Route::get('/admin/cars/create',[carcontroller::class,'create']);


