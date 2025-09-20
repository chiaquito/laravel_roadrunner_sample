<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HealthCheck;



Route::get('health', [HealthCheck::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
