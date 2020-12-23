<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class AdmissionController extends Controller
{
	public function index(){

	}
    public function store(Request $request)
    {
        
        
        DB::insert('insert into studentinfo (password, name,cellNo,email,nameOfInst,program,batchNo,gender,dob,bloodGroup,nationality,nationalId,passportNo,fatherName,motherName,fatherCellNo,motherCellNo,localGuardian,localGuardianCell,presentAddress,parmanentAddress,perPhoto,admitDate,isActive) values (?, ?,?,?,?, ?,?,?,?, ?,?,?,?, ?,?,?,?, ?,?,?,?, ?,?,?)', [
        	$request->password, 
        	$request->name,
        	$request->cellNo,
        	$request->email,
        	$request->nameOfInst,
        	$request->program,
        	$request->batchNo,
        	$request->gender,
        	$request->dob, 
        	$request->bloodGroup,
        	$request->nationality,
        	$request->nationalId,
        	$request->passportNo,
        	$request->fatherName,
        	$request->motherName,
        	$request->fatherCellNo,
        	$request->motherCellNo, 
        	$request->localGuardian,
        	$request->localGuardianCell,
        	$request->presentAddress,
        	$request->parmanentAddress,
        	$request->perPhoto->store('images','public'),
        	$request->admitDate,
        	$request->isActive]);
      // $sess =$request->all();
         // return view('backend.admin.payment.add');
       // $request->session()->push('user.teams',  $sess);
            $request->session()->flash('success', 'Admission successful!');
         return back();
    }
}
