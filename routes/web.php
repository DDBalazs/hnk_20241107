<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HnkController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HnkController::class, 'Welcome']);
Route::get('/all',[HnkController::class, 'All']);
Route::get('/abc', [HnkController::class, 'ABC']);
Route::get('abc/{p}',[HnkController::class, 'ABCP']);
Route::get('/telepules/{id}',[HnkController::class, 'Adatlap']);
Route::get('/varosok', [HnkController::class, 'Varosok']);
Route::get('/nagykozseg', [HnkController::class, 'Nagykozseg']);
Route::get('/kozseg', [HnkController::class, 'Kozseg']);
