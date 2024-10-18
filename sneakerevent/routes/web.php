<?php

use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Route to display the ticket purchase form
Route::get('/tickets', [TicketController::class, 'create'])->name('tickets.create');

// Route to handle ticket purchases
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');

// Route to display the event page
Route::get('/event', function () {
    return view('event');
})->name('event');

// Route to display the stand page
Route::get('/stand', function () {
    return view('stand');
})->name('stand');

// Route to display the success page after ticket purchase
Route::get('/success', function () {
    return view('success');
})->name('success');

// Test mail route
Route::get('/test-mail', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email from Laravel.'
    ];

    \Mail::to('your-email@example.com')->send(new \App\Mail\TestMail($details));

    return 'Email Sent';
});
