<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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

Route::get('/comics', function () {
    $array_fumetti = config('data');
    $data = [
        'fumetti' => $array_fumetti
    ];
    return view('comics', $data);
});

Route::get('/characters', function () {
    return view('characters');
});
