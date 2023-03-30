<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;

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

// Route::get('/', function () {
//     return view('login');
// });


Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/', function () {
    return view('login');
});

Route::post('/loginAction', [logincontroller::class, 'loginAction']);

