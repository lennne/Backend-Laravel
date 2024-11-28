<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//this will return an array which will later be converted into a json object
Route::get('/about', function () {
    //return ['foo'=>'bar']
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});