<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/co', function () {
    return view('co');
});
Route::get('/sukses', function () {
    return view('sukses');
});