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

Route::get('/', function () {
    return redirect('/interviews');
});
Route::get('/interviews', 'InterviewsController@index');
Route::get('/interviews/view', 'InterviewsController@view');
Route::post('/interviews','InterviewsController@store');
Route::get('interviews/view/{id}','InterviewsController@show');
Route::put('interviews/view/{id}', 'InterviewsController@update');