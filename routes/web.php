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

// Route::get('/', 'PageController@index')->name('home');

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

Route::get('/contactus', 'FormController@index')->name('contactus');

// Route::post('/contactus', function () {
    // return view('/contact-response');
// });
Route::post('/contact-response', 'FormController@store');
// Route::get('/contactus', 'PageController@contact');
// Route::post('/contactus', 'ContactUsController@sendContact');
// Route::get('/contact-response', 'PageController@contactResponse');

// Route::get('/testing', function () {
//     return view('/testing');
// });

// Route::get('/tw-card', function () {
//     return view('/not used/tw-card');
// });

// Route::get('/test-footer', function () {
//     return view('/not used/test-footer');
// });

// Route::get('/contact-form', function () {
//     return view('/contact-form');
// });
// Route::post('/submit', 'ContactFormController@submit');

// Route::get('/contact', 'PageController@contact')->name('contact');
// Route::post('/contact', 'PageController@sendContact');