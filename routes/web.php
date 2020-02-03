<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/list', function () {
    return view('Menu.list');
});

Route::get('/syarat', function () {
    return view('Menu.syarat');
});

Route::get('/pembayaran', function () {
    return view('Menu.pembayaran');
});

Route::get('/kontak', function () {
    return view('Menu.kontak');
});
