<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        // Validate the request...

        // Generate password reset token
        $token = Str::random(60);

        // Here you would typically save the token to your password_resets table

        // Send password reset email
        Mail::to($request->email)->send(new PasswordResetEmail($token));

        return back()->with('status', 'Password reset link sent to your email!');
    }
}
