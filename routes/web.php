<?php

// Route::get('/', 'PageController@index')->name('home');

Route::get('/', function () {
    return view('landing');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/paf', function () {
    return view('paf');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/sendfiles', function () {
    return view('sendfiles');
});

Route::get('/contactus', 'FormController@index')->name('contactus');
Route::get('/contactus-test', 'FormController@index2')->name('contactus');

Route::post('/contact-response', 'FormController@store');
// Route::get('/contact-response', 'FormController@store');