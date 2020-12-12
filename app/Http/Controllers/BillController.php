<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $billing = DB::table('billing')
            ->join('studentinfo', 'billing.billTo', '=', 'studentinfo.userId')
            ->select('billing.*', 'studentinfo.name', 'billing.amount','billing.billingDate')
            ->get();
       
        return view('backend.admin.bill.view', compact('billing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $st_info = DB::table('studentinfo')->get();
            return view('backend.admin.bill.add', compact('st_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
  
    	if(count($request->type) > 0){
    		foreach($request->type as $key=>$value){

    		
    		DB::insert('insert into billing (type, amount,billTo,billingDate) values (?, ?,?,?)', [$request->type[$key], $request->amount[$key],$request->billTo,'12/10/20']);
    		}
			
    	}
    	
        
         return $this->index();
        
        
    }

}
