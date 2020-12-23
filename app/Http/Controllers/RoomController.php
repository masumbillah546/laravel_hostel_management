<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
    	$datas = Room::all();
    	$count =$datas->count();
        return view('backend.admin.setup.room', compact('datas'));
    }

        public function add(Request $request)
    {

    	//print_r($request);

    	$data = new Room();

    	$data->roomNo = $request->roomNo;
    	$data->blockId = $request->blockId;
    	$data->noOfSeat = $request->noOfSeat;
        $data->available = $request->noOfSeat;
    	$data->description = $request->description;
    	$data->isActive = "Y";

    	$data->save();
    	
        return $this->index();
    }
}
