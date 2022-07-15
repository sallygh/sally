<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\car;
use Illuminate\Http\Request;

class carcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([

            'model' =>'required|min:3|max:255|string',
            'price'=>'required',
            'year'=>'required',
            'description'=>'required|min:5'

           ]);

       $car= new car();
       $car->model=$request->model;
       $car->price=$request->price;
       $car->year = $request->year;
       $car->description=$request->description;
       $car->save();

        return redirect()->route('indexcar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {


        return view('admin.cars.show', compact($car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car)
    {
        $request->validate([
            'model' =>'required|min:3|max:255|string',
            'price'=>'required',
            'year'=>'required',
            'description'=>'required|min:5'
        ]);

        $car->model=$request->model;
        $car->price=$request->price;
        $car->year = $request->year;
        $car->description=$request->description;
        $car->save();

         return redirect()->route('indexcar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car)
    {
        $car->delete();
        return redirect()->route('indexcar');
    }
}
