<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st_info = DB::table('studentinfo')->get();
        return view('backend.admin.students.list',compact('st_info') );
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
    public function show($student)
    {
         $profile = DB::table('studentinfo')->where('userId', $student)->get();
        return view('backend.admin.students.profile',compact('profile') );
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

     public function deposit()
    {   
        $st_info = DB::table('studentinfo')->get();
        $deposit = DB::table('deposit')
            ->join('studentinfo', 'deposit.userId', '=', 'studentinfo.userId')
            ->select('deposit.*', 'studentinfo.name', 'deposit.amount','deposit.depositDate')
            ->get();
       
        return view('backend.admin.students.deposit', compact('st_info','deposit'));
    }

    public function depositStore(Request $request)
    {   
         $date=date("Y/m/d");
        DB::insert('insert into deposit (userId, amount,depositDate) values (?, ?,?)', [$request->userId, $request->amount,$date]);
        return back();
    }

     public function seat_aloc()
    {   

        $seataloc = DB::table('seataloc')
            ->join('studentinfo', 'seataloc.userId', '=', 'studentinfo.userId')->get();
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            // return $seataloc->userId;

            $info = array();
            foreach($seataloc as $user){
                
                 array_push($info, $user->userId);
            }
            //return $info;

        $st_info = DB::table('studentinfo')
        ->whereNotIn('userId',$info)
        ->get();
        
       $rooms= Room::all();
       return view('backend.admin.setup.seatalocation', compact('rooms','st_info','seataloc'));
    }

    public function seat_aloc_store(Request $request)
    {   
        DB::insert('insert into seataloc (userId, roomNo,blockNo,monthlyRent) values (?, ?,?,?)', [$request->userId, $request->roomNo,$request->blockNo,$request->monthlyRent]);

        DB::update('update rooms set available =  available - 1 where roomNo = ?', [$request->roomNo]);
        return $this->seat_aloc();
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
