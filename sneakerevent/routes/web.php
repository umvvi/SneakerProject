<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StandController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/stands', [StandController::class, 'index'])->name('stands.index');
Route::get('/stands/create', [StandController::class, 'create'])->name('stands.create');
Route::post('/stands', [StandController::class, 'store'])->name('stands.store');


// Ticket Routes
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store'); // Store route for tickets
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('/tickets/success', [TicketController::class, 'success'])->name('tickets.success'); // Success route

// Event Routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'show'])->name('event.show');
