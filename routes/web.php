<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DelaVictoriaFranz', 'App\Http\Controllers\FeaturesController@index');