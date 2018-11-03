@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Articles
                </div>

                <div class="panel-body">
                    <form action="/articles/create" method="POST">

                        {{ csrf_field() }}


                        <div class="form-group">

                            <label for="content">Title</label>
                            <textarea name="title" class="form-control"></textarea>
                            <label for="content">Body</label>
                            <textarea name="body" class="form-control"></textarea>
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