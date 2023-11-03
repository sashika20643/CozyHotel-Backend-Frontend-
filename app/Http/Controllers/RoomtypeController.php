<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\roomtype;
use RealRashid\SweetAlert\Facades\Alert;

class RoomtypeController extends Controller
{
    public function index(){
        $roomtypes = Roomtype::all();
return view("pages.Index",compact("roomtypes"));
    }

    public function create(){

        return view("pages.Roomtype.create");
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required',
            'price' => 'required|numeric|min:0',

        ]);

        Roomtype::create($request->all());
        Alert::success('Room type added successfully!',"You have added a Room type");

        return redirect('/home')->with('success', 'Room type added successfully!');
    }

    public function edit($id)
    {
        $roomtype = Roomtype::find($id);
        return view('pages.Roomtype.update', compact('roomtype'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required',
            'price' => 'required|numeric|min:0'

        ]);

        $roomtype = Roomtype::find($id);
        $roomtype->update($request->all());
        Alert::success('Roomtype updated successfully!',"You have updated the Roomtype");
        return redirect('/home');
    }

    public function delete($id)
    {
        $roomtype = Roomtype::find($id);
        // $roomtype->issuances()->delete();
        $roomtype->delete();
        Alert::success('Roomtype deleted successfully!',"You have deleted the Roomtype");
        return redirect('admin/home');
    }


}
