<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('search');
});

// /api/search/name/jacob/name/price

Route::get('/api/search/{type}/{typeValue}/{OrderBy?}/{filterBy?}', function () {
    return response()->json([[
            'name' => "Jacob",
            'price' => 200
    ]]);
});


