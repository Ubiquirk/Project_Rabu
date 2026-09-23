<?php

use App\Http\Controllers\PController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/testweb',  [PController::class, "p"]);
Route::get('/profile', [PController::class,"Profile"]);
