<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Article;
use App\Website;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    {
        $articles=Article::all();

        return view('articles.show',compact('articles'));
    }
    public function search()
    {
        $q = Input::get( 'q' );
        if($q != ""){
            $article = Article::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'body', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
            $pagination = $article->appends ( array (
                'q' => Input::get ( 'q' )
            ) );
            if (count ( $article ) > 0)
                return view ( 'articles.search' )->withDetails ( $article )->withQuery ( $q );
        }

        return view ( 'articles.search' )->withMessage ( 'No Details found. Try to search again !' );
    }

    public function create()
    {
        return view('articles.create');
    }


    public function store(Request $request)
    {
        $boolean=random_int(0,1);
        $ids=range(1,10);
        shuffle($ids);



        $article=new Article($request->all());
        $article->user_id=Auth::user()->id;
        $article->title=$request->title;
        $article->body=$request->body;
        $article->save();
        if($boolean)
        {
            $sliced=array_slice($ids ,0,2);
            $article->websites()->attach($sliced);
        }
        else {
            $article->websites()->attach(array_rand($ids, 1));
        }

        return redirect('/article');

    }
}
