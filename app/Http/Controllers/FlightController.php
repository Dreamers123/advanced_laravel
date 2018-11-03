<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function create()
    {
        return view('flights.create');
    }
    public function store(Request $request)
    {
        $flights=new Flight($request->all());
        $flights->name=$request->name;
        $flights->total_seats=5;
        $flights->available_seats=5;
        $flights->prize=5000;
        $flights->destination=$request->destination;
        $flights->arrival_time=$request->arrival_time;
        $flights->departure_time=$request->departure_time;
        $flights->save();

        return redirect('/flights');
    }
    public function show(Flight $flights)
    {
        $flights=Flight::all();
        return view('flights.show',compact('flights'));
    }
    public function index(Flight $flight)
    {
        return view('flights.index',compact('flight'));
    }
}
