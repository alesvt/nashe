<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/ranking-global', function(){
    return view('ranking-global');
})->name('global');