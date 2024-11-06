<?php

use App\Models\Event;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

// Homepage route
Route::get('/', function () {
    return view('home', ['events' => Event::all()]);
})->name('home');

// Event routes (only showing a specific event)
Route::prefix('events')->name('events.')->group(function () {
    Route::get('/{event}', [EventController::class, 'show'])->name('show');  // Shows a specific event's details
});

// Stand routes
Route::prefix('stands')->name('stands.')->group(function () {
    Route::get('/', [StandController::class, 'index'])->name('index');  // Shows list of stands
    Route::get('/{stand}', [StandController::class, 'show'])->name('show');  // Shows a specific stand's details
});

// Ticket routes
Route::prefix('tickets')->name('tickets.')->group(function () {
    Route::get('/', [TicketController::class, 'index'])->name('index');  // Shows list of ticket options
    Route::get('/purchase', [TicketController::class, 'purchase'])->name('purchase');  // Ticket purchase form
});
