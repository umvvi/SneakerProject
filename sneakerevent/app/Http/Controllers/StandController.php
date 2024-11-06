<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use App\Models\Seller;
use Illuminate\Http\Request;

class StandController extends Controller
{
    // Display a list of stands
    public function index()
    {
        $stands = Stand::all();
        return view('stands.index', compact('stands'));
    }

    // Show the form to create a new stand
    public function create()
    {
        $sellers = Seller::all();
        return view('stands.create', compact('sellers'));
    }

    // Store a new stand
    public function store(Request $request)
    {
        $request->validate([
            'seller_id' => 'required|exists:sellers,id', // Change 'stands' to 'sellers'
            'stand_type' => 'required',
            'price' => 'required|numeric',
            'rented_status' => 'boolean',
        ]);

        Stand::create($request->all());
        return redirect()->route('stands.index')->with('success', 'Stand created successfully.');
    }

    // Show the form to edit a stand
    public function edit(Stand $stand)
    {
        $sellers = Seller::all();
        return view('admin.stands.edit', compact('stand', 'sellers'));
    }

    // Update an existing stand
    public function update(Request $request, Stand $stand)
    {
        $request->validate([
            'seller_id' => 'required|exists:sellers,id', // Change 'stands' to 'sellers'
            'stand_type' => 'required',
            'price' => 'required|numeric',
            'rented_status' => 'boolean',
        ]);

        $stand->update($request->all());
        return redirect()->route('stands.index')->with('success', 'Stand updated successfully.');
    }

    // Delete a stand
    public function destroy(Stand $stand)
    {
        $stand->delete();
        return redirect()->route('stands.index')->with('success', 'Stand deleted successfully.');
    }
}
