<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . ' ' . $lastname;
});

Route::get('/test', function() {
    return "This is a test!";
})->name('testpage');


Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio")->group(function() {
    Route::get('/company', function () {
        return "Company Listing";
    });
    
    Route::get('/orginization', function () {
        return "List of orginizations";
    });
});
