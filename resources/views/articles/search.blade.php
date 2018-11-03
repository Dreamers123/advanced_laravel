
@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-2">
        @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Article details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->body}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($details){!! $details->render() !!}@endif
    @elseif(isset($message))
        <p>{{ $message }}</p>
    @endif
</div>
    </div>
@endsection