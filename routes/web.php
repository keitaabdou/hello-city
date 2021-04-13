<?php

use Illuminate\support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/about-us', function(){
    return view('about');
});