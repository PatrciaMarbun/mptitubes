<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/terjemahkan', function () {
    return view('terjemahkan');
});

Route::get('/konversiterjemahkan', function () {
    return view('konversiterjemahkan');
});

Route::get('/resmi', function () {
    return view('resmi');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/riwayatbaca', function () {
    return view('riwayatbaca');
});

Route::get('/riwayatunduh', function () {
    return view('riwayatunduh');
});