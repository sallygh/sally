<?php

use App\Http\Controllers\Admin\carcontroller;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\CatrgoryController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\GroupCollection;

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

  Route::get('groups/index',[GroupController::class, 'index'])->name('groups.index');
  Route::get('groups/create',[GroupController::class, 'create'])->name('groups.greate');
  Route::get('groups/store',[GroupController::class, 'store'])->name('groups.store');
  Route::put('groups/{group}',[GroupCollection::class,'update'])->name('groups.update');
  Route::get('groups/{group}/edit',[Groupcontroller::class,'edit'])->name('groups.edit');


   Route::get('cats/index',[CatController::class , 'index'])->name('cats.index');
   Route::get('cats/create',[CatController::class , 'create'])->name('cats.create');
   Route::get('cats/store',[CatController::class , 'store'])->name('cats.store');

   
});


