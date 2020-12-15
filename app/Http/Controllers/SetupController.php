<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetupController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users2')->get();
        return view('backend.admin.setting.adduser',compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fees()
    {
         $fees = DB::table('feesinfo')->get();
          return view('backend.admin.setup.fees', compact('fees'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mealRate()
    {
        return view('backend.admin.setup.mealrate');
    }

    public function timeset()
    {
        return view('backend.admin.setup.timeset');
    }
    public function block()
    {
        return view('backend.admin.setup.block');
    }
}
