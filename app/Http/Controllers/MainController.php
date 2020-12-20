<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index()
    {
       
        return view('backend.admin.auth.login');
    }

    public function login(Request $request )
    {
    	//if($match){
    	//To store data in the session, you will typically use the put method or the session helper:
    	// $request->session()->regenerate();
    	//$request->session()->all();
    	//$request->session()->flash('status', 'Task was successful!');
    	//return $request->session()->flash('status');
    	$request->session()->put('email', $request->email);
    	// return $request->session()->get('email');
    	//return session('status');
        return redirect('/student');
        // return session('email');

    	//}
      
    }
     public function logout(Request $request)
    {
       $request->session()->invalidate();
        return redirect('/');
    }
}
