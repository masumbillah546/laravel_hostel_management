<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $att = DB::table('attendence')
            ->join('studentinfo', 'attendence.userId', '=', 'studentinfo.userId')
            ->select('attendence.*', 'studentinfo.name', 'attendence.date','attendence.isAbsence','attendence.isLeave','attendence.remark')
            ->get();
        return view('backend.admin.attendence.list',compact('att') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
