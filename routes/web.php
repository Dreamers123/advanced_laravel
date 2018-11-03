<?php

use App\User;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

/* Flights */

Route::get('flights/{flight}/book_seat','PassengerController@create');
Route::post('flights/{flight}/book_seat','PassengerController@store');
Route::get('/flights/create', 'FlightController@create');
Route::post('/flights/create', 'FlightController@store');
Route::get('/flights/{flight}', 'FlightController@index');
Route::get('/flights', 'FlightController@show');



Route::get('/database','TestController@index');

Route::get('/eloquent','EloquententController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/one-to-one', function (){
    return App\Profile::find(1)->user;
});

/* Articles */

Route::get('/user/{userId}/articles','ArticleUuseController@index');
Route::get('/article','ArticleController@show');
Route::get('/articles/create','ArticleController@create');
Route::post('/articles/create','ArticleController@store');
Route::any('article_search','ArticleController@search');
Route::any('data_test','ArticleUuseController@test');

Route::resource('api/users','Api\UserController');


Route::get('/react', function () {
    return view('react');
});

/* Search */
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
        $pagination = $user->appends ( array (
            'q' => Input::get ( 'q' )
        ) );
        if (count ( $user ) > 0)
            return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
    }
    return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );




Route::get('users', function () {
    $users = App\User::paginate(5);
    $users->withPath('custom/url');
    return $users;
    //
});