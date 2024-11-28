<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//this will return the text 'About Page' when user access the web route '/about'
Route::get('/about', function () {
    return 'About Page';
});
