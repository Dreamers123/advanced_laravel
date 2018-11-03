<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Volunteer;
class TestController extends Controller
{
    public function index(Request $request)
    {

        $sortBy = null;

        $users = DB::table('users')
            ->when($sortBy, function ($query) use ($sortBy) {
                return $query->orderBy($sortBy);
            }, function ($query) {
                return $query->orderBy('name');
            })
            ->get();

        $users = DB::table('users')
                ->orderBy('name')
                ->get();


        $users = Volunteer::popular()->active()->orderBy('created_at')->get();
        return $users;



        /*
         DB::insert('insert into users (id, name,email,password) values (?,?,?,?)',
         [11, 'Dayle','abeer@gmail.com',12345]);

        $users = DB::table('users')
            ->whereDate('created_at', '2016-12-31')
            ->get();

        $user = DB::table('users')
                ->latest()
                ->first();

        $users = DB::table('volunteers')
            ->where('votes', '=', 100)
            ->get();

           DB::table('volunteers')
            ->where('active', '<>', 1)
            ->update(['active' => 1]);

        $users = DB::table('volunteers')
            ->where('votes', '>', 100)
            ->orWhere('name', 'Id quia dolorem sunt numquam ullam.')
            ->get();
        return $users;


         DB::table('users')
            ->where('name', '=', 'John')
            ->orWhere(function ($query) {
                $query->where('votes', '>', 100)
                    ->where('title', '<>', 'Admin');
            })
            ->get();

          $orders = DB::table('volunteers')
            ->select('votes', DB::raw('SUM(votes) as total_votes'))
            ->groupBy('votes')
            ->havingRaw('SUM(votes) > 2')
            ->get();

        $orders = DB::table('volunteers')
            ->select('name', DB::raw('name as Nick_Name'))
            ->groupBy('name')
            ->havingRaw('SUM(votes) > 20')
            ->get();
         $users = DB::table('volunteers')
            ->select(DB::raw('count(*) as user_count, active'))
            ->where('active', '<>', 1)
            ->groupBy('active')
            ->get();
         return $users;


         $price = DB::table('volunteers')
              ->where('active', 1)
              ->avg('votes');

        $price = DB::table('volunteers')->max('votes');

        return $price;
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        return $results;


        $users = DB::select('select * from volunteers where active = ?', [1]);
        DB::update('update volunteers set votes = 100 where name = ?', ['Quia cum mollitia hic quas asperiores rerum ut.']);
        return $users;
        $roles = DB::table('posts')->pluck('title','body');
        echo $roles;
       $users=DB::table('users')->orderBy('id')->chunk(100, function ($users) {
            foreach ($users as $user) {
                echo $user->name;
            }
        });*/



    }
}
