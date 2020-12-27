<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \PDF;

class SdashboardController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $user=session('userId');
        // $user=session('userId');

        //  if(!isset($user)){
        //     return redirect('/login2');
        // }
        
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

         if(!isset($user)){
            return redirect('/login2');
        }
       
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

          if(!isset($user)){
            return redirect('/login2');
        }

         $profile = DB::table('studentinfo')->where('userId', $user)->get();
        return view('backend.students.profile.profile',compact('profile') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function padd(){

         $user=session('userId');

         if(!isset($user)){
            return redirect('/login2');
        }

       
        return view('backend.students.payment.add');
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

     public function payment_view($student='U008')
    {
         $user=session('userId');

          if(!isset($user)){
            return redirect('/login2');
        }

         $stp = DB::table('stdpayment')
        ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')
            ->select('stdpayment.*', 'studentinfo.name', 'stdpayment.transDate','stdpayment.paymentBy','stdpayment.transNo','stdpayment.amount','stdpayment.remark')->where('stdpayment.userId', $user)->get();
        return view('backend.students.payment.view',compact('stp') );
    }


    public function pdf(Request $student)
    {
         $user=session('userId');

          if(!isset($user)){
            return redirect('/login2');
        }

         $stp = DB::table('stdpayment')
        ->join('studentinfo', 'stdpayment.userId', '=', 'studentinfo.userId')
            ->select('stdpayment.*', 'studentinfo.name', 'stdpayment.transDate','stdpayment.paymentBy','stdpayment.transNo','stdpayment.amount','stdpayment.remark')->where('stdpayment.userId', $user)->get();
        $pdf=PDF::loadview('backend.students.payment.pdf',compact('stp') );
        $date=date('d/m/Y');
         return $pdf->stream($date.'_payment.pdf');
         // return $pdf->download('payment.pdf');
    }

    

     public function bill_view($student='U008')
    {
         $user=session('userId');

          if(!isset($user)){
            return redirect('/login2');
        }

        $billing = DB::table('billing')->get();
            $amount = $billing->sum('amount');
       
       
        return view('backend.students.bill.view', compact('billing','amount'));
    }

     public function add_att($student)
    {
         $user=session('userId');

          if(!isset($user)){
            return redirect('/login2');
        }

         $profile = DB::table('studentinfo')->where('userId', $user)->get();
        return view('backend.admin.students.profile',compact('profile') );
    }

     public function att_view($student='U008')
    {
        $user=session('userId');

         if(!isset($user)){
            return redirect('/login2');
        }

          $st_info = DB::table('studentinfo')->get();
        $att = DB::table('attendence')
        ->join('studentinfo', 'attendence.userId', '=', 'studentinfo.userId')
            ->select('attendence.*', 'studentinfo.name', 'attendence.date','attendence.isAbsence','attendence.isLeave','attendence.remark')->where('attendence.userId', $user)->get();
        // $att = DB::table('attendence')->where('userId', $request->userId)->get();
        return view('backend.students.attendence.list', compact('st_info','att'));
    }
}
