<?php

namespace App\Http\Controllers;

use App\Medicinecategory;
use Illuminate\Http\Request;

class MedicinesCategoriesController extends Controller
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
        // $mcategories = mCategories::all();
        $categories = Medicinecategory::all();
        return view('setting.medicine_categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Medicinecategory::all();
        return view('setting.medicine_categories', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //        dd($request->all());
            for($i=0;$i<count($request->m_type);$i++){
                Medicinecategory::create([
                    'm_type'=>$request->m_type[$i],
                ]);
            }
            $categories = Medicinecategory::all();
            return view('setting.medicine_categories', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicinecategory  $Medicinecategory
     * @return \Illuminate\Http\Response
     */
    public function show(Medicinecategory $Medicinecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicinecategory  $Medicinecategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicinecategory $Medicinecategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicinecategory  $Medicinecategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicinecategory $Medicinecategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicinecategory  $Medicinecategory
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medicinecategory::find($id)->delete();
        return redirect()->back();
    }
}
