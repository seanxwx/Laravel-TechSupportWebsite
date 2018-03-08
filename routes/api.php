<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::middleware('cors')->get('tickets', 'TicketController@fetch');

Route::middleware('cors')->get('tickets/list','TicketController@index');

Route::middleware('cors')->get('tickets/{id}', 'TicketController@show');

Route::middleware('cors')->post('tickets/{id}/update', 'TicketController@update');



// List
Route::middleware('cors')->get('Comment/list','CommentController@index');

// Show
Route::middleware('cors')->get('Comment/{id}', 'CommentController@show');

Route::middleware('cors')->post('Comment', 'CommentController@apistore');