<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.main');
})->name('main');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('person/{fio}', function ($fio) {
    return 'Person '.$fio;
});

Route::get('vehicle/{vehicle}', function ($vehicle) {
    return 'Vehicle '.$vehicle;
});

