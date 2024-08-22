<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/detail/gelora', function() {
    return view('detail.gelora');
});
