<?php

namespace App\Http\Controllers;
 use App\Flight;
use App\Passenger;
use Illuminate\Http\Request;
use DB;
class PassengerController extends Controller
{
    public function create()
    {
        $flight=Flight::all();
        return view('passenger.create',compact('flight'));
    }

    public function store(Request $request,Flight $flight)
    {
        $this->validate(request(),[
            'name'=>'required',
        ]);
        $seats=$flight->available_seats;
        $passenger=new Passenger($request->all());
        $passenger->name=$request->name;
        DB::table('flights')
            ->where('id', $flight->id)
            ->update(['available_seats' => $seats -1 ]);

        $flight->passenger()->save($passenger);

        return back();

    }

}
