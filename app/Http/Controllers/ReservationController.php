<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use App\Models\roomtype;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function index(){
         $reservations = reservation::all();
        return view("pages.reservations.index");
    }

    public function filter(){
        $roomtypes = roomtype::all();

return view("pages.reservations.filter",compact("roomtypes"));
    }
    public function create(){

    }
    public function store(Request $request){}
}
