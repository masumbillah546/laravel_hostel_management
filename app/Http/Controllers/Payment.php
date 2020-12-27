<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \PDF;
class Payment extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stdpayment = DB::table('stdpayment')->get();
        
       return view('backend.admin.payment.view', compact('stdpayment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
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
        
        
        DB::insert('insert into stdpayment (userId, paymentBy,transNo,amount,transDate,remark) values (?, ?,?,?,?, ?)', [$request->userId, $request->paymentBy,$request->transNo,$request->amount,$request->transDate,$request->remark]);
         // return view('backend.admin.payment.add');
            $request->session()->flash('success', 'Payment added successfully!');
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function approval()
    {
         $stdpayment = DB::table('stdpayment')
         ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')->where('stdpayment.isApprove', 'No')->get();
        
       return view('backend.admin.payment.approval', compact('stdpayment'));
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
    public function update($serial)
    {
    	 DB::update('update stdpayment set isApprove="Yes" where serial = ?', [$serial]);
        return $this->approval();
        // "update stdpayment set isApprove='Yes' where serial='".$_GET['id']."'"
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

    public function show(Request $request)
    {
        $st_info = DB::table('studentinfo')->get();

        $stp = DB::table('stdpayment')
        ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')
            ->select('stdpayment.*', 'studentinfo.name', 'stdpayment.transDate','stdpayment.paymentBy','stdpayment.transNo','stdpayment.amount','stdpayment.remark')->where('stdpayment.userId', $request->userId)->get();
         $request->session()->flash('uid', $request->userId);
       return view('backend.admin.payment.view', compact('st_info','stp'));
    }

    public function pdf(Request $student)
    {
        
         $stp = DB::table('stdpayment')
        ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')
            ->select('stdpayment.*', 'studentinfo.name', 'stdpayment.transDate','stdpayment.paymentBy','stdpayment.transNo','stdpayment.amount','stdpayment.remark')->where('stdpayment.userId', $student->userId)->get();
             //$request->session()->flash('uid', $student->userId); 
             //$request->session()->flash('uname', $student->name); 
        $pdf=PDF::loadview('backend.students.payment.pdf',compact('stp') );
        $date=date('d/m/Y');

         return $pdf->stream($date.'_payment.pdf');
         // return $pdf->download('payment.pdf');
    }


}
