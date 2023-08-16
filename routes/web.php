<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('/about');
});
Route::get('/classes', function () {
    return view('/classes');
});
Route::get('/pricing', function () {
    return view('/pricing');
});
Route::get('/visit-us', function () {
    return view('/visit-us');
});
Route::get('/recital', function () {
    return view('/recital');
});
Route::get('/attendance-and-schedule-changes', function () {
    return view('/attendance-and-schedule-changes');
});
//Route::get('/summer', function () {
//    return view('/summer');
//});
Route::get('/events', function () {
    return view('/events');
});

Route::get('recital-music', function () {
    return view('recital-music');
});

Route::post('recital-music', function () {
    return view('recital-music');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
