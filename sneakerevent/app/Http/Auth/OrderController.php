<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationEmail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
public function store(Request $request)
{
// Validate the request and create the order
$order = Order::create($request->all());

// Send order confirmation email
Mail::to($order->user->email)->send(new OrderConfirmationEmail($order));

return redirect()->back()->with('success', 'Order placed successfully! A confirmation email has been sent.');
}
}
