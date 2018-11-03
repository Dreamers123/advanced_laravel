@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Show {{ $flight->name }} notes
                    </div>


                           <div class="panel-body">
                           <form action="/flights/{{ $flight->id }}/book_seat" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input id="name" name="name" class="form-control"> {{old('name')}}</input>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-success pull-right">
                            </div>
                        </form>
                        <hr>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection