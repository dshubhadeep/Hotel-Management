<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Room;
use App\Reservation;


class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('room.book');
    }

    public function view()
    {
        $userId = auth()->user()->id;
        $bills = Reservation::where('custId', '=', $userId)->get();
        return view('room.view')->with('bills',$bills);
    }

    public function book(Request $request) {

        $totalRooms = Room::where('type','=', $request->input('type'))
        ->where('choice', '=', $request->input('choice'))
        ->where('view', '=', $request->input('view'))
        ->get();

        $ci = Carbon::parse($request->input("checkIn"));
        $co = Carbon::parse($request->input("checkOut"));
        $days = $ci->diffInDays($co, false);

        if (count($totalRooms) > 0) {

            if ($days >= 0) {
                $reservation = new Reservation;
                $reservation->custId = auth()->user()->id;
                $reservation->checkIn = $request->input("checkIn");
                $reservation->checkOut = $request->input("checkOut");
                $reservation->cost = ($days) * $totalRooms[0]->tariff;
                $reservation->roomNo = $totalRooms[0]->roomno;
                $reservation->save();
                return redirect('/home')->with('success', 'Room booked');
            } else {
                return redirect('/bookroom')->with('error', 'Please select valid check out date.');
            }
            
        } else {
            return redirect('/bookroom')->with('error', 'Selected room is not available.');
        }
        
       
    }
}
