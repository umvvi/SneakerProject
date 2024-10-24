<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StandController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('index');
})->name('home');

// Stand routes
Route::get('/stands/create', [StandController::class, 'create'])->name('stand.create');
Route::post('/stands', [StandController::class, 'store'])->name('stand.store');

// Ticket routes
Route::get('/tickets/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('ticket.store');

