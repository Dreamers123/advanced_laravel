<?php

namespace App\Http\Controllers;
use App\Flight;
use App\Article;
use App\Volunteer;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EloquententController extends Controller
{
    public function index()
    {


        $volunteers=collect(User::all());



        $keyed = $volunteers->mapWithKeys(function ($item) {
            return [$item['email'] => $item['name']];
        });

        return $keyed->all();





























        /*
        $collection = collect([
            [
                'name' => 'John Doe',
                'department' => 'Sales',
            ],
            [
                'name' => 'Jane Doe',
                'department' => 'Sales',
            ],
            [
                'name' => 'Johnny Doe',
                'department' => 'Marketing',
            ]
        ]);

        $grouped = $collection->mapToGroups(function ($item, $key) {
            return [$item['department'] => $item['name']];
        });

        $grouped->toArray();


        return $grouped->get('Sales')->all();

        $users = collect([1, 2, 3])->all();
         $average = collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->avg('foo');
         $average = collect([1, 1, 2, 4])->avg();
         $collection = collect([1, 2, 3, 4, 5, 6, 7,9,9]);

         $chunks = $collection->chunk(4);
         $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
         $collapsed = $collection->collapse();

         $volunteers=collect(Volunteer::all());

         return $volunteers->chunk(4);



        return $flattened->all();
        return $collapsed->all();
         return $chunks->toArray();


           $collection = collect([
            ['name' => 'Sally'],
            ['school' => 'Arkansas'],
            ['age' => 28]
        ]);

        $flattened = $collection->flatMap(function ($values) {
            return array_map('strtoupper', $values);
        });

        $collection = collect([
            ['account_id' => 1, 'product' => 'Desk'],
            ['account_id' => 2, 'product' => 'Chair'],
        ]);
         return $collection->implode('product', ' - ');

         $flights =Flight::find([1, 2, 3]);
         return $flights;

         $flights = Flight::where('active', 0)
             ->orderBy('name')
             ->get();

         foreach (Flight::where('active', 0)->cursor() as $flight) {
         }
        $users=Volunteer::where('active',0)->get();

         foreach ($users as $user)
         {
             echo $user->name;
         }
        */

    }
}
