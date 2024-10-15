<?php
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/tickets', function () {
    return view('ticket');
})->name('ticket');

Route::post('/ticket', [TicketController::class, 'store'])->name('ticket.store');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/stand', function () {
    return view('stand');
})->name('stand');

Route::get('/success', function () {
    return view('success');
})->name('success');


Route::get('/test-ticket', function () {
    try {
        Ticket::create([
            'event_id' => 1, // Set this correctly
            'ticket_type' => 'TEST TICKET',
            'name' => 'John Doe',
            'event_date' => '2024-09-01',
            'city' => 'Amsterdam',
        ]);
        return 'Ticket created!';
    } catch (\Exception $e) {
        return 'Failed to create ticket: ' . $e->getMessage();
    }
});

