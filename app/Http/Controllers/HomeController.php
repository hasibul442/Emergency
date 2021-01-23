<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $count = DB::table('medicines')->count();
        $count1 = DB::table('users')->count();
        $count2 = DB::table('companies')->count();
        $count3 = DB::table('doctors')->count();
        $count4 = DB::table('ambulances')->count();
        return view('index',compact('count','count1','count2','count3','count4'));
    }
}
