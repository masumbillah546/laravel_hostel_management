<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
       
        return view('backend.admin.auth.login');
    }

    public function login(Request $request )
    {
        $userId = DB::table('studentinfo')->where('email', $request->loginId)->where('password', $request->password)->get();
        if($userId->count()){
             foreach ($userId as $id) {
             $request->session()->put('userId', $id->userId);
             $request->session()->put('name', $id->name);
             return redirect('/student');
        // return $request->session()->get('email');
            }
        }else{
            $request->session()->flash('invalid', 'User id or password incorrect!');
            return back();
        }
       
    	//if($match){
    	//To store data in the session, you will typically use the put method or the session helper:
    	// $request->session()->regenerate();
    	//$request->session()->all();
    	//$request->session()->flash('status', 'Task was successful!');
    	//return $request->session()->flash('status');
    	// $request->session()->put('email', $request->email);
       
    	//return session('status');
        //return redirect('/student');
        // return session('email');

    	//}
      
    }
     public function logout(Request $request)
    {
       $request->session()->invalidate();
        return redirect('/');
    }
}
