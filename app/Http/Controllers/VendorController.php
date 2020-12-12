<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = DB::table('payment')->get();
        return view('backend.admin.vendor.view',compact('payment') );
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
        DB::insert('insert into payment (description, paymentTo,amount,paymentBy,paymentDate) values (?, ?,?,?,?)', [$request->description, $request->paymentTo,$request->amount,$request->paymentBy,'20/12/20']);
        return $this->index();
    }

}
