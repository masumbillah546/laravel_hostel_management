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
        $month = date('m');

    	$st = DB::table('studentinfo')->get();
        $seataloc = DB::table('seataloc')->get();
    	$notices = DB::table('notice')->get();
    	$employee = DB::table('employee')->get();
        $salary = DB::table('salary')->get();
        $billing = DB::table('billing')->get();
    	$meals = DB::table('meal')->where('date', $date)->get();
        $tmeals = DB::table('meal')->whereMonth('date','=', $month)->get();
        $mealrate = DB::table('mealrate')->where('id', 1)->get();

    	$st_count=$st->count();
    	$data = Room::all();
    	$count =$data->count();
        $cost = DB::table('cost')->where('type','Bazar')->whereMonth('date','=', $month)->get();
        $service = DB::table('cost')->where('type','Service')->whereMonth('date','=', $month)->get();
        $equipment = DB::table('cost')->where('type','Equipment')->whereMonth('date','=', $month)->get();
    	$total =$data->sum('available');
    	return view('backend.admin.dashboard' , compact('data','count','total','st_count','notices','employee','meals','tmeals','mealrate','cost','salary','billing','equipment','service','seataloc'));
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
