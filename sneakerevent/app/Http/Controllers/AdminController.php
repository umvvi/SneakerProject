<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Display a list of admins (optional, as Filament has its own admin interface)
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    // Show the form to create a new admin
    public function create()
    {
        return view('admins.create');
    }

    // Store a new admin in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        Admin::create($validated);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }
}
