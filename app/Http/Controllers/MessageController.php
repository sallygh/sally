<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function  show( Messages  $message) {
        return view('message-show' , compact('message'));
    }


    public function messageall () {
        $message = Messages::all();
        return  view('message', compact('message'));
    }


    public function store (Request $request) {
        $request->validate([
         'name' =>'required|min:3|max:255|string',
         'email'=>'required|email',
         'contact'=>'required|min:5'
        ]);
    $message= new Messages();
    $message->name=$request->name;
    $message->email=$request->email;
    $message->contact=$request->contact;
    $message->save();

    }
}
