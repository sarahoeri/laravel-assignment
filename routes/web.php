<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [Authcontroller::class, 'register']);

Route::get('/login', [Authcontroller::class, 'index']);

Route::post('/register', [Authcontroller::class, 'submit_registration']);