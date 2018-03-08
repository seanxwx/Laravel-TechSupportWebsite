<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\Ticket;
use Illuminate\Support\Facades\Input;
use App\CommentDetails;



Route::get('/', 'PagesController@home');




Route::get('FAQ',
    ['as' => 'FAQ', 'uses' => 'AboutController@create']);

Route::post('FAQ',
    ['as' => 'contact_store', 'uses' => 'AboutController@store']);


Route::resource('ticket', 'TicketController');


Route::get('track',
    ['as' => 'track', 'uses' => 'TrackController@create']);


//Route::get('track', 'TrackController@create');


Route::get('thankyou', function () {
    return view('ticket.thankyou');
})->name('thankyou');


//Route::resource('its','ITSController');


Route::resource('comment', 'CommentController');



Route::any('track.search',function(){

    $q = Input::get ( 'q' );
    $tick = Ticket::where('id','LIKE','%'.$q.'%')->get();
    $comm = CommentDetails::where('Ticket_id','LIKE','%'.$q.'%')->get();

    if(count($tick) > 0)

        return view('track.search')->withDetails($tick)->withDet($comm)->withQuery( $q );

    else return view ('track.search')->withMessage('No Details found. Try to search again !');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*user view pages*/
//Route::get('track', 'TrackController@create')->middleware('admin');
Route::get('its','ITSController@index')->middleware('admin');
//Route::resource('its','ITSController')->middleware('admin');





Route::get('its/{id}',
    ['as' => 'its.show', 'uses' => 'ITSController@show'])->middleware('admin');

//Route::get('its/update/{id}',
//    ['as' => 'its.update', 'uses' => 'ITSController@update'])->middleware('admin');


//Route::get('ticket','TicketController@create')->middleware('admin');


//Route::get('its/comment/{id}',
//    ['as' => 'its.comment', 'uses' => 'CommentController@store'])->middleware('admin');



//Route::get('its', 'CommentController@store')->middleware('admin');
//Route::get('its/view/index',
//    ['as' => 'its', 'uses' => 'ITSController@index'])->middleware('admin');



//Route::get('its',
//    ['as' => 'its.show', 'uses' => 'ITSController@index'])->middleware('admin');