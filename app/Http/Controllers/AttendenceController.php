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
    public function add()
    {
        $st_info = DB::table('studentinfo')->get();
        return view('backend.admin.attendence.add', compact('st_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $date=date('Y/m/d');
          $att = DB::table('attendence')->where('userId',$request->userId)->where('date', $date)->get();
           if(!count($att)>0){
            DB::insert('insert into attendence (userId, date,isAbsence,isLeave,remark) values (?, ?,?,?,?)', [$request->userId,$date,$request->isAbsence,$request->isLeave,$request->remark]);
             $request->session()->flash('success', 'Attendence added successfully!');
             return back();
        }
        $request->session()->flash('ns', 'Attendence alreday added!');
         return back();
         // return $request;
    }

    public function show(Request $request)
    {
       // $date=date('Y/m/d');
        $st_info = DB::table('studentinfo')->get();
        $att = DB::table('attendence')
        ->join('studentinfo', 'attendence.userId', '=', 'studentinfo.userId')
            ->select('attendence.*', 'studentinfo.name', 'attendence.date','attendence.isAbsence','attendence.isLeave','attendence.remark')->where('attendence.userId', $request->userId)->get();
        // $att = DB::table('attendence')->where('userId', $request->userId)->get();
        return view('backend.admin.attendence.view', compact('st_info','att'));
    }
}
