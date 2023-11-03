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
    public function create(Request $request){
$startDate=$request->checkin_date;
$endDate=$request->checkout_date;
       if(Reservation::where('room_id',$request->number)->where('roomtype_id',$request->type_id)->whereBetween('checkin_date', [$startDate,$endDate])
        ->orWhereBetween('checkout_date', [$startDate, $endDate])
        ->orWhere(function ($query) use ($startDate, $endDate) {
            $query->where('checkin_date', '<=', $startDate)
                ->where('checkin_date', '>=', $endDate);
        })
        ->count()>0){
echo "not available";
        }
        else{
return view("pages.reservations.create");
        }


 }
 function store(Request $request){
    $reservation = reservation::create($request->all());
 }

    }


