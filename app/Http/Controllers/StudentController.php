<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

     public function seat_aloc()
    {   $st_info = DB::table('studentinfo')->get();
       $rooms= Room::all();
       return view('backend.admin.setup.seatalocation', compact('rooms','st_info'));
    }

    public function seat_aloc_store(Request $request)
    {   
        DB::insert('insert into seataloc (userId, roomNo,blockNo,monthlyRent) values (?, ?,?,?)', [$request->userId, $request->roomNo,$request->blockNo,$request->monthlyRent]);

        DB::update('update rooms set noOfSeat =  noOfSeat - 1 where roomNo = ?', [$request->roomNo]);
       // $st_info = DB::table('seataloc')->insert();
       // $rooms= Room::all();
       // return view('backend.pages.setup.seatalocation', compact('rooms','st_info'));
      // $data = new DB('seataloc');
      // $data->userId=$request->userId;
      // $data->roomNo=$request->roomNo;
      // $data->blockNo=$request->blockNo;
      // $data->monthlyRent=$request->monthlyRent;

      // $data->insert();
    }
}
