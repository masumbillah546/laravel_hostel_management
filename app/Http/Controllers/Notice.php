<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Notice extends Controller
{
    public function index(){

    	// $datas = DB::table('notice')->get();
    	
    	// return view('backend.admin.dashboard' , compact('datas'));
    }

    public function create(){
    	
    	return view('backend.admin.notice.add');
    }
    public function store(Request $request){

    	// $datas = DB::table('notice')->get();
    	DB::insert('insert into notice (title, description, createdDate ) values (?, ?, ?)', [$request->title, $request->description, "20/12/2020"]);
    	
    	return $this->create();
    }
}
