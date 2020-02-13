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
    return view('landing');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/sendfiles', function () {
    return view('sendfiles');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/testing', function () {
    return view('/testing');
});

Route::get('/tw-card', function () {
    return view('/not used/tw-card');
});

Route::get('/test-footer', function () {
    return view('/not used/test-footer');
});