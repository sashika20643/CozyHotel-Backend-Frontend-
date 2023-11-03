<?php

namespace App\Http\Controllers;
use App\Models\room;
use App\Models\roomtype;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class RoomController extends Controller
{
    //
    public function index(){
        $rooms = room::all();
    }

    public function create(){
        $roomtypes = roomtype::all();
return view("pages.Rooms.create",compact("roomtypes"));
    }
    public function store(Request $request){
        $this->validate($request, [
            'number' => 'required',
            'roomtype_id' => 'required',


        ]);

        Room::create($request->all());
        Alert::success('Room  added successfully!',"You have added a Room");

        return redirect('/home')->with('success', 'Room added successfully!');


    }
}
