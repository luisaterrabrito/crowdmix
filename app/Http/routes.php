<?php


Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'AboutController@index']);


Route::group(['prefix' => 'playlist', 'as' => 'playlist.'], function () {
    Route::get('{id}/add', ['as' => 'add', 'uses' => 'PlaylistController@add']);
    Route::post('{id}/add', ['as' => 'add', 'uses' => 'PlaylistController@doAdd']);
    Route::get('{id}/play', ['as' => 'play', 'uses' => 'PlaylistController@play']);
});

Route::group(['prefix' => 'youtube', 'as' => 'youtube.'], function () {
    Route::get('query', ['as' => 'query', 'uses' => 'YouTubeController@query']);
});