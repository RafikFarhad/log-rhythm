<?php


Route::group([
    'middleware' => config('logrhythm.middleware', ['web', 'auth']),
    'namespace' => 'Farhad\LogRhythm\Http\Controllers'
],
    function () {
        Route::get(config('logrhythm.url', 'logrhythm'), 'LogViewerController@index');
    });