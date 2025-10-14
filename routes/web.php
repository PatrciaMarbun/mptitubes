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

Route::get('/komunitas', function () {
    return view('komunitas');
});

Route::get('/komunitasdetail', function () {
    return view('komunitasdetail');
});

Route::get('/komunitasbaca', function () {
    return view('komunitasbaca');
});

Route::get('/resmi', function () {
    return view('resmi');
});

Route::get('/bukuresmidetail', function () {
    return view('bukuresmidetail');
});

Route::get('/audiobook', function () {
    return view('audiobook');
});

Route::get('/audiobookdetail', function () {
    return view('audiobookdetail');
});

Route::get('/audiobookdengar', function () {
    return view('audiobookdengar');
});

Route::get('/artikel', function () {
    return view('artikel');
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