<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArticleUuseController extends Controller
{
    public function index($userId)
    {
        $articles=User::find($userId)->articles;

        return view('articles.index',compact('articles'));
    }
    public function test()
    {
        $users=[];
        $users[0] = DB::table('users')->select('name')->get();
        $users[1] = DB::table('users')->select('name', 'email as user_email')->get();
        $users[2] = DB::table('users')
            ->whereNotIn('id', [1, 2, 3])
            ->get();
        $users[3]= DB::table('users')
            ->whereDate('created_at', '2019-07-29')
            ->get();

        $users[4] = DB::table('users')
            ->whereColumn([
                ['updated_at', '<', 'created_at']
            ])->get();

        return $users;
    }
}
