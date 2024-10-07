<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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



Route::post('/buy-ticket', [TicketController::class, 'store'])->name('buy-ticket');

Route::get('/test-email', function () {
    $data = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'recipient@example.com',
        'location' => 'Amsterdam',
        'ticket_type' => 'REGULAR TICKET'
    ];

    Mail::to($data['email'])->send(new TicketPurchased($data));
    return 'Email sent!';
});

