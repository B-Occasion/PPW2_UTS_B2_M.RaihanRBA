<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/killyourself', function(){
    return view('killyourself');
}) -> name('killyourself');

