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

//date in the format Y-m-d
//station options [kfm,capetalk,702,947]
//php artisan migrate --seed
Route::get('/line-up/{date}/{station}', 'LineupController@index');
