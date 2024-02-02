<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MainController;

// Home
Route::get('/home',[MainController::class,'home']);
Route::get('/shop',[MainController::class,'shop']);
Route::get('/about',[MainController::class,'about']);
Route::get('/contact',[MainController::class,'contact']);

Route::get('/', function () {
    return view('welcome');
});
