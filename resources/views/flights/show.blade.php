@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @foreach ($flights as $flight)
                            <div class="well">

                                   <h1> {{ $flight->name }}  </h1>
                                   <h2>Total Seat {{ $flight->total_seats }}</h2>
                                @if($flight->available_seats > 0)
                                   <h3>Available Seat {{ $flight->available_seats }}</h3>
                                <a style="text-decoration: none" href="flights/{{ $flight->id }}"  >
                                    <button class="btn btn-default">
                                        Book your Seats</button> </a>
                                    @else
                                    <button class="btn btn-default">
                                        No Seats available</button> </a>
                                    @endif
                             </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection