<?php

namespace App\Http\Controllers;

use App\Ambulance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AmbulanceController extends Controller
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
        $ambulances = Ambulance::all();
        return view('ambulances.index', compact('ambulances'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambulances = Ambulance::all();
        return view('ambulances.create', compact('ambulances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambulances = Ambulance::where('driver_phone',$request->driver_phone)->first();
        if(empty($ambulances)){
            Ambulance::create([
                'driver_name'=>$request->driver_name,
                'driver_phone' =>$request->driver_phone,
                'hospital_name'=>$request->hospital_name,
                'location'=>$request->location,
                'ambulance_type'=>$request->ambulance_type,
                'price'=>$request->price,
            ]);
            Session::flash('success','Ambulance Details Added Successfully');
            return redirect()->route('ambulances.create');      
        }
        else{
            Session::flash('error','Ambulance Details Exists');
            return redirect()->route('ambulances.create'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function show(Ambulance $ambulance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambulance $ambulance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambulance $ambulance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ambulance  $ambulance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambulance $ambulance)
    {
        //
    }
}
