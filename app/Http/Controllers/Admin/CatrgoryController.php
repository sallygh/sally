<?php

namespace App\Http\Controllers\Admin;

use App\Models\catrgory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CatrgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catrgory= catrgory::all();
        return view('admin.CatrgoryController.index', compact('catrgory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CatrgoryController.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        dd($request->all());

     $request->validate([

            'name' =>'required',
            'one'=>'required',
            'cabcity'=>'required',
           ]);

           $catrgory = new catrgory();
           $catrgory -> one = $request->one ;
           $catrgory -> name = $request->name;
           $catrgory -> cabcity = $request->cabcity;
           $catrgory->save();

           return view('admin.CatrgoryController.index' , compact('catrgory'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catrgory  $catrgory
     * @return \Illuminate\Http\Response
     */
    public function show(catrgory $catrgory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catrgory  $catrgory
     * @return \Illuminate\Http\Response
     */
    public function edit(catrgory $catrgory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catrgory  $catrgory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catrgory $catrgory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catrgory  $catrgory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catrgory $catrgory)
    {
        //
    }
}
