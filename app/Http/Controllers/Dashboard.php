<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class Dashboard extends Controller
{
    public function index(){

    	$st = DB::table('studentinfo')->get();
    	$st_count=$st->count();
    	$data = Room::all();
    	$count =$data->count();
    	$total =$data->sum('noOfSeat');
    	return view('backend.pages.dashboard' , compact('data','count','total','st_count'));
    }
}
