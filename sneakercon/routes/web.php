<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ticket', function () {
    return view('ticket');
})->name('ticket');

Route::get('/stand', function () {
    return view('stand');
})->name('stand');

Route::get('/event', function () {
    return view('event');
})->name('event');

