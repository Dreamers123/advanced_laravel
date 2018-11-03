@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Flights
                </div>

                <div class="panel-body">
                    <form action="/flights/create" method="POST">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="name">Name of the Flight</label>
                            <input id="name" name="name" class="form-control"> </input>
                            <label for="name">Detination</label>
                            <input id="destination" name="destination" class="form-control"> </input>
                            <div class="time">
                            <label for="departure_time">
                               Departure Time
                                <input type ="datetime-local" class="form-control" name="departure_time">

                            </label>
                            <br>
                            <label for="arrival_time">
                                Arrival Time
                                <input type="datetime-local" class="form-control" name="arrival_time">

                            </label>

                        </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success pull-right">
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection