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

Route::get('/security-headers', function () {
    return view('security-headers');
})->name('securityheaders');

Route::get('/good-practice', function() {
    return view('good-practice');
})->name('goodpractice');

Route::get('.well-known/security.txt', function() {
    return response()->file('.well-known/security.txt');
});