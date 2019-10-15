<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
       
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        return view('home',['res' => $res]);
    }

    public function internships()
    {
        // $res = \DB::table('student')->pluck('Fname', 'Lname', 'LibCnumber', 'gender'.'email','dept','phno');
       
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;
        $res2 = \DB::select('select * from internship where LIBNO = ?', [$id]);
        foreach ($res2 as $key) {
            $cid =  $key->CID;  
            $res3 = \DB::select('select cname from company where cid = ?', [$cid]);
            $key->company = $res3[0]->cname;
        }
       return view('internships',['res' => $res2]);
    }
    public function activities()
    {
        // $res = \DB::table('student')->pluck('Fname', 'Lname', 'LibCnumber', 'gender'.'email','dept','phno');
       
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;

        $res2 = \DB::select('select * from activities where LIBNO = ?', [$id]);
        return view('activities',['res' => $res2]);
    }
    public function add_activities()
    {
        
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;

        $res2 = \DB::select('select * from activities where LIBNO = ?', [$id]);
        return view('add-activities');
    }
    public function add_internship()
    {
        // $res = \DB::table('student')->pluck('Fname', 'Lname', 'LibCnumber', 'gender'.'email','dept','phno');
       
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;
        $res2 = \DB::select('select * from internship where LIBNO = ?', [$id]);
        foreach ($res2 as $key) {
            $cid =  $key->CID;  
            $res3 = \DB::select('select cname from company where cid = ?', [$cid]);
            $key->company = $res3[0]->cname;
        }
       return view('add-internship');
    }
}
