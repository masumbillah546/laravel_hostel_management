<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meal = DB::table('meal')
            ->join('studentinfo', 'meal.userId', '=', 'studentinfo.userId')
            ->select('meal.*', 'studentinfo.name', 'meal.noOfMeal','meal.date')
            ->get();
       
        return view('backend.admin.meal.view', compact('meal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
         $st_info = DB::table('studentinfo')->get();
        return view('backend.admin.meal.add', compact('st_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $date2=time();
        $date=date("Y/m/d");
          DB::insert('insert into meal (userId, noOfMeal,date) values (?, ?,?)', [$request->userId, $request->noOfMeal,$date]);
         return back();
    }
}
