<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Mail\TicketPurchased; // Make sure to import your Mailable class
use Illuminate\Support\Facades\Mail;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Ticket Purchase Page
Route::get('/ticket', function () {
    return view('ticket');
})->name('ticket');

// Stand Rental Page
Route::get('/stand', function () {
    return view('stand');
})->name('stand');

// Event Page
Route::get('/event', function () {
    return view('event');
})->name('event');

// Handle Ticket Purchase
Route::post('/buy-ticket', [TicketController::class, 'store'])->name('ticket.purchase');

// Test Email Route (for debugging purposes)
Route::get('/test-email', function () {
    $data = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'recipient@example.com',
        'location' => 'Amsterdam',
        'ticket_type' => 'REGULAR TICKET',
    ];

    // Send a test email (remove or comment this out in production)
    Mail::to($data['email'])->send(new TicketPurchased($data));
    return 'Email sent!';
});
