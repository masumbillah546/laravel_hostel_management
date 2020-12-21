<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class Dashboard extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){

        $date=date('Y/m/d');

    	$st = DB::table('studentinfo')->get();
    	$notices = DB::table('notice')->get();
    	$employee = DB::table('employee')->get();
    	$meals = DB::table('meal')->where('date', $date)->get();
    	$st_count=$st->count();
    	$data = Room::all();
    	$count =$data->count();
    	$total =$data->sum('noOfSeat');
    	return view('backend.admin.dashboard' , compact('data','count','total','st_count','notices','employee','meals'));
    }

    public function show(Request $id){

        $users = DB::select('select * from studentinfo where userId = ?', [1]);

       // $st = DB::table('studentinfo')->get();
        $notices = DB::table('notice')->get();
       // $employee = DB::table('employee')->get();
        $meals = DB::select('select * from meal where userId = ?', [1]);
        $meals2 = DB::select('select * from meal where userId = ?', [$date]);
        $deposit = DB::select('select * from deposit where userId = ?', [$id]);
       // $st_count=$st->count();
       // $data = Room::all();
        //$count =$data->count();
        $total =$data->sum('noOfSeat');
        return view('backend.admin.dashboard' , compact('data','count','total','st_count','notices','employee','meals'));
    }
}
