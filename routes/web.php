<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/detail/gelora', function() {
    return view('pages.detail.gelora');
});

Route::get('/detail/gelora-e', function() {
    return view('pages.detail.gelora-e');
});

Route::get('/detail/i-auto', function() {
    return view('pages.detail.i-auto');
});

Route::get('/detail/supercab', function() {
    return view('pages.detail.supercab');
});

Route::get('/detail/glory-560', function() {
    return view('pages.detail.glory-560');
});

Route::get('/detail/seres-e1', function() {
    return view('pages.detail.seres-e1');
});

Route::get('/promo', function() {
    return view('pages.promo');
});

Route::get('/testdrive', function() {
    return view('pages.testdrive');
});

Route::get('/harga', function() {
    return view('pages.harga');
});
