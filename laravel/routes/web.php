<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/car-selling', function () {
    return view('car-selling');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/offers', function () {
    return view('offers');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/careers', function () {
    return view('careers');
});