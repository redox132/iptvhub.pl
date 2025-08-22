<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/freetrail', function () {
    return view('free_trial');
})->name('freetrail');

Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');

Route::fallback(function () {
    return view('statuses.404');
})->name('404');