<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\moviecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/sign-up', function () {
    return view('sign-up');
});


Route::get('/', function () {
    return view('login');
});

Route::post('/loginAction', [logincontroller::class, 'loginAction']);
Route::get('/homepage', [moviecontroller::class, 'index']);

