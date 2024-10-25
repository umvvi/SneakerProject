<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stand;
use App\Models\Vendor;
use App\Http\Controllers\MailController;

class StandController extends Controller
{
    // Display a list of stands
    public function index()
    {
        $stands = Stand::all(); // Retrieve all stands or customize as needed
        return view('stands.index', compact('stands'));
    }

    // Show the form to create a new stand
    public function create()
    {
        $vendors = Vendor::all();
        return view('stands.create', compact('vendors'));
    }

    // Store a new stand in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'stand_type' => 'required|string',
            'price' => 'required|numeric',
            'rented_status' => 'boolean',
            'is_active' => 'boolean',
            'remark' => 'nullable|string',
        ]);

        $stand = Stand::create($validated);

        // Optionally send a mail notification
        $mailController = new MailController();
        $mailController->sendStandRentedNotification($stand);

        return redirect()->route('stand.create')->with('success', 'Stand created successfully.');
    }
}
