<?php

use App\Models\Messages;
use Illuminate\Http\Request;
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

Route::get('/home', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact-my', function (Request $request) {
$message= new Messages();
$message->name=$request->name;
$message->email=$request->email;
$message->contact=$request->contact;
$message->save();

});

Route::get('/admin-message', function () {
    $message = Messages::all();
    return  view('admin.message', compact('message'));
});