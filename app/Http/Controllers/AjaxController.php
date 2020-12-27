<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\User;

class AjaxController extends Controller
{
    //
    
    public function index(){

    	//$list = DB::table('ajax')->get();
        // return view('ajax', compact('list'));
        return view('ajax');



    }


    public function store(Request $request)
	 {
	        // $grocery = new Grocery();
	        // $grocery->name = $request->name;
	        // $grocery->type = $request->type;
	        // $grocery->price = $request->price;

	        DB::insert('insert into ajax (name, type,price) values (?, ?,?)', [$request->name, $request->type,$request->price]);
         //return back();

	        //$grocery->save();
	        $list = DB::table('ajax')->get();
       
	        // return response()->json(['success'=>'Data is successfully added']);
	        return Response::json($list);
	 }




	  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $data['users'] = DB::table('users')->get();
   
        return view('ajaxcrud',$data);
    }
    
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {  
        $user = User::updateOrCreate(
            ['id' => $request->user_id],
            ['name' => $request->name, 'email' => $request->email]
        );
        return Response::json($user);
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       // $where = array('id' => $id);
        $user  = DB::table('users')->where('id',$id)->get()->first();
 
        return Response::json($user);
    }
 
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
   
        return Response::json($user);
    }

}
