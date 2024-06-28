<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/chapter', function () {
    return view('chapter');
});
Route::get('/subject', function () {
    return view('subject');
});
