<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SdashboardController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

         $date=date('Y/m/d');
         $user=session('userId');
       
        $notices = DB::table('notice')->get();
        $deposit = DB::table('deposit')->where('userId',  $user)->get();
        $mealrate = DB::table('mealrate')->where('id', 1)->get();
      
        $meals = DB::table('meal')->where('date', $date)->where('userId',$user )->get();
        $mealst = DB::table('meal')->where('userId', $user)->get();

        return view('backend.students.st_dashboard', compact('notices','meals','mealst','mealrate','deposit'));
    }

     public function profile_view($student='U008')
    {
         $user=session('userId');
         $profile = DB::table('studentinfo')->where('userId', $user)->get();
        return view('backend.students.profile.profile',compact('profile') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notice(){
        $datas = DB::table('notice')->get();
        return view('backend.admin.notice.add', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payment_store(Request $request)
    {
        
    }
     public function payment_view($student='U008')
    {
         $user=session('userId');
         $stp = DB::table('stdpayment')
        ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')
            ->select('stdpayment.*', 'studentinfo.name', 'stdpayment.transDate','stdpayment.paymentBy','stdpayment.transNo','stdpayment.amount','stdpayment.remark')->where('stdpayment.userId', $user)->get();
        return view('backend.students.payment.view',compact('stp') );
    }

    

     public function bill_view($student='U008')
    {
         $user=session('userId');
        $billing = DB::table('billing')
            ->join('studentinfo', 'billing.billTo', '=', 'studentinfo.userId')
            ->select('billing.*', 'studentinfo.name', 'billing.amount','billing.billingDate')->where('billing.billTo', $user)
            ->get();
       
        return view('backend.students.bill.view', compact('billing'));
    }

     public function add_att($student)
    {
         $user=session('userId');
         $profile = DB::table('studentinfo')->where('userId', $user)->get();
        return view('backend.admin.students.profile',compact('profile') );
    }

     public function att_view($student='U008')
    {
        $user=session('userId');
          $st_info = DB::table('studentinfo')->get();
        $att = DB::table('attendence')
        ->join('studentinfo', 'attendence.userId', '=', 'studentinfo.userId')
            ->select('attendence.*', 'studentinfo.name', 'attendence.date','attendence.isAbsence','attendence.isLeave','attendence.remark')->where('attendence.userId', $user)->get();
        // $att = DB::table('attendence')->where('userId', $request->userId)->get();
        return view('backend.students.attendence.list', compact('st_info','att'));
    }
}
