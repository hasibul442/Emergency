<?php

namespace App\Http\Controllers;

use App\Medicines;
use App\Company;
use App\Medicinecategory;
use Illuminate\Http\Request;
use DB;

class MedicinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicines::all();
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.index',compact('medicines','categories','companies'))->with('i');
    }
    public function client_display(){
        $medicines = Medicines::all();
       return view('mediciens.show',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines = Medicines::all();
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.add',compact('medicines','categories','companies'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medicines::create([
            'name'=> $request -> name,
            'g_name'=> $request -> g_name,
            'm_type' => $request -> m_type,
            'power' => $request -> power,
            'company' => $request -> company,
            'price' => $request -> price,
        ]);
        $medicines = Medicines::all();
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.add',compact('medicines','categories','companies'))->with('success', 'Show is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function show(Medicines $medicines)
    {
        $medicines = Medicines::all();
       return view('mediciens.details',compact('medicines'));
    }
        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicines  $medicines
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
       $medicines = Medicines::find($id);
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.details',compact('medicines','categories','companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicines  $medicines
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicines = Medicines::find($id);
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.edit',compact('medicines','categories','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicines  $medicines
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Medicines $medicines)
    {
        $id = $request->id;
        $medicines = Medicines::find($id);
        $medicines->update([
                'name'=> $request -> name,
                'g_name'=> $request -> g_name,
                'm_type' => $request -> m_type,
                'power' => $request -> power,
                'company' => $request -> company,
                'price' => $request -> price,
        ]);
        $medicines = Medicines::all();
        $categories = Medicinecategory::all();
        $companies = Company::all();
        return view('mediciens.index',compact('medicines','categories','companies'))->with('i');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicines  $medicines
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicines::find($id)->delete();
        return redirect()->route('medicines.index');
    }
}
