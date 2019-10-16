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

    public function results()
    {
        // $res = \DB::table('student')->pluck('Fname', 'Lname', 'LibCnumber', 'gender'.'email','dept','phno');
       
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;

        $res2 = \DB::select('select * from res where LibC = ?', [$id]);
        return view('results',['res' => $res2]);
    }
    public function add_activities()
    {
        return view('add-activities');
    }
    public function add_internship()
    {
       return view('add-internship');
    }
    public function add_result()
    {
       return view('add-result');
    }
    public function edit_profile(){
        return view('edit-profile');
    }

    public function insert_activities(Request $data)
        
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;
        $data['libno'] = $id;
        $res2 = array('atype'=> $data['atype'], 'description'=> $data['description'],'sdate'=> $data['sdate'],'libno'=> $id);
        \DB::table('activities')->insert($res2);
        
        $res3 = \DB::select('select * from activities where LIBNO = ?', [$id]);
        return view('activities',['res' => $res3]);
    }
    public function insert_internship(Request $data)
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $libno = $res[0]->LibCnumber;
        $cid = \DB::select('select * from company where cname = ?',[$data['cname']]);
        $cid = $cid[0]->cid;

        $res2 = array('PNAME'=>$data['name'],'DOMAIN'=>$data['domain'],'MENTOR'=>$data['mentor'],'STIPEND'=>$data['stipend'],
                      'SDATE'=>$data['sdate'],'EDATE'=>$data['edate'],'CERTI'=>'link to bucket','LIBNO'=>$libno,'CID'=>$cid);
        
        \DB::table('internship')->insert($res2);
         $res3 = \DB::select('select * from internship where LIBNO = ?', [$libno]);
        return view('add-internship');
        
    }

    public function insert_results(Request $data)
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $libno = $res[0]->LibCnumber;
        // $cid = \DB::select('select * from company where cname = ?',[$data['cname']]);
        // $cid = $cid[0]->cid;
        $res = \DB::select('select * from res where LibC = ?', [$libno]);
        if (count($res)>0)
            \DB::table('res')->where('LibC', '=', $libno)->delete();
        $res2 = array('sem1'=>$data['sem1'],'sem2'=>$data['sem2'],'sem3'=>$data['sem3'],'sem4'=>$data['sem4'],'sem5'=>$data['sem5'],
                      'sem6'=>$data['sem6'],'sem7'=>$data['sem7'],'sem8'=>$data['sem8'],'LibC'=>$libno);
        \DB::table('res')->insert($res2);
        $res3 = \DB::select('select * from res where LibC = ?', [$libno]);
        return view('results',['res' => $res3]);
    }

    public function edit_activities(Request $data)   
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;
        $aid = $data->Aid;
        $res3 = \DB::select('select * from activities where aid = ?', [$aid]);
        
        return view('edit-activities',['res' => $res3]);
    }
    public function delete_internship(Request $data)
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $libno = $res[0]->LibCnumber;
        $aid = $data->interid;
        \DB::table('internship')->where('interid', '=', $aid)->delete();

        $id = $res[0]->LibCnumber;
        $res2 = \DB::select('select * from internship where LIBNO = ?', [$id]);
        foreach ($res2 as $key) {
            $cid =  $key->CID;  
            $res3 = \DB::select('select cname from company where cid = ?', [$cid]);
            $key->company = $res3[0]->cname;
        }
       return view('internships',['res' => $res2]);
    }
    public function delete_activities(Request $data)
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $libno = $res[0]->LibCnumber;
        $aid = $data->Aid;
        \DB::table('activities')->where('aid', '=', $aid)->delete();

        $id = $res[0]->LibCnumber;
        $res2 = \DB::select('select * from activities where LIBNO = ?', [$id]);
        
       return view('activities',['res' => $res2]);
    }

    public function update_activities(Request $data)
        
    {
        $id = \Auth::user()->email;
        $res = \DB::select('select * from student where email = ?', [$id]);
        $id = $res[0]->LibCnumber;
        $data['libno'] = $id;
        $aid = $data['Aid'];
        
        $res2 = array('atype'=> $data['atype'], 'description'=> $data['description'],'sdate'=> $data['sdate'],'libno'=> $id);
        \DB::table('activities')
        ->where('aid', $aid)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update($res2);  // update 
        
        $res3 = \DB::select('select * from activities where LIBNO = ?', [$id]);
        return view('activities',['res' => $res3]);
    }

}
