

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
        <form action="/article_search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
            </div>
        </form>
    </div>
    </div>
    <hr/>
    @forelse($articles as $article)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>{{ $article->owner->name  }}</b></div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <p1>{{ $article->title }}</p1>

                            <p>{{ $article->body }}</p>
                            <p>
                                @foreach($article->websites as $website)
                                    <a href="{{ $website->url }}">{{ $website->url }}</a>
                                    <br>
                                    @endforeach

                            </p>
                        </div>
                    </div>
                </div>
                @empty
                    <h1 style="margin-left: 300px;font-size:100px"> Nothing to Show</h1>
                @endforelse
            </div>
        </div>
@endsection