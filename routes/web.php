<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::view('/', 'home');

/* 
    two ways to write this route.
    this is the first, below is the second
Route::get('/second', function () {
    return view('second');
});
*/

Route::view('/second', 'second');

