<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class Dashboard extends Controller
{
    public function index(){

    	$st = DB::table('studentinfo')->get();
    	$notices = DB::table('notice')->get();
    	$employee = DB::table('employee')->get();
    	$meals = DB::table('meal')->get();
    	$st_count=$st->count();
    	$data = Room::all();
    	$count =$data->count();
    	$total =$data->sum('noOfSeat');
    	return view('backend.admin.dashboard' , compact('data','count','total','st_count','notices','employee','meals'));
    }
}
