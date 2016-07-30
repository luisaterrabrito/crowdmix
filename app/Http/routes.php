<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'homepage', 'uses'=>'HomepageController@index']);
Route::get('/about',['as'=>'about', 'uses'=>'AboutController@index']);




Route::group(['prefix' => 'playlist', 'as' => 'playlist.'], function () {
    Route::get('{id}/add', ['as' => 'add', 'uses' => 'PlaylistController@add']);
    Route::get('{id}/play', ['as' => 'play', 'uses' => 'PlaylistController@play']);
});