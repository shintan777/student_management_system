<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $res = \DB::table('student')->pluck('Fname', 'Lname', 'LibCnumber', 'gender'.'email','dept','phno');
        $res = \DB::table('student')->get();
        return view('home',['res' => $res]);
    }
}
