<?php

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
Route::get('/csecarnival2018', function () {
    return view('carnival2018');
});
Route::get('/test', function () {
    return view('trypage');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/programmingRegistration', function () {
    return view('programming_contest');
});
Route::get('/fifaRegistration', function () {
    return view('fifa');
});

Route::get('/hackathonRegistration', function () {
    return view('hackathon');
});

Route::get('/codRegistration', function () {
    return view('cod');
});

Route::get('/nfsRegistration', function () {
    return view('nfs');
});

Route::get('/othRegistration', function () {
    return view('oth');
});

Route::get('/typingRegistration', function () {
    return view('typing');
});

