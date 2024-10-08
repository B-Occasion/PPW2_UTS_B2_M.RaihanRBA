<?php

use App\Http\Controllers\PemainController;

use Illuminate\Support\Facades\Route;

Route::get('/', [PemainController::class, 'index']);

Route::get('/indexidk', [PemainController::class, 'index']);

