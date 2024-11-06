<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
public function register(Request $request)
{
// Validate the request...

$user = User::create($request->all());

// Send welcome email
Mail::to($user->email)->send(new WelcomeEmail($user));

return redirect()->back()->with('success', 'Registration successful! A welcome email has been sent.');
}
}
