<?php

use Illuminate\Http\Request;
use App\Inventory;

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

Route::get('/search/{type}/{typeValue}/{OrderBy?}/{filterBy?}', function ($type, $typeValue, $OrderBy = 'name', $filterBy = 'none') {

    $inventory = Inventory::search($type, $typeValue, $OrderBy, $filterBy)->get();
    return response()->json($inventory);
})->middleware('api');
