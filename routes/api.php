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

// Route::get('api/search', function (Request $request) {
//     return response()->json([[
//             'name' => "Jacob",
//             'price' => 200
//         ]]);
// })->middleware('auth:api');

Route::get('/search/{type}/{typeValue}/{OrderBy?}/{filterBy?}', function () {
    return response()->json([[
            'name' => "Jacob",
            'price' => 200
    ]]);
})->middleware('api');
