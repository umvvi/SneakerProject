<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    // Display a list of stands
    public function index()
    {
        $sellers = Seller::all();
        return view('admin.stands.index', compact('sellers'));
    }

    // Show the form to create a new seller
    public function create()
    {
        return view('admin.stands.create');
    }

    // Store a new seller
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'special_status' => 'boolean',
            'sells_sort' => 'required',
            'stand_type' => 'required',
        ]);

        Seller::create($request->all());
        return redirect()->route('stands.index')->with('success', 'Seller created successfully.');
    }

    // Show the form to edit a seller
    public function edit(Seller $seller)
    {
        return view('admin.stands.edit', compact('seller'));
    }

    // Update an existing seller
    public function update(Request $request, Seller $seller)
    {
        $request->validate([
            'name' => 'required',
            'special_status' => 'boolean',
            'sells_sort' => 'required',
            'stand_type' => 'required',
        ]);

        $seller->update($request->all());
        return redirect()->route('stands.index')->with('success', 'Seller updated successfully.');
    }

    // Delete a seller
    public function destroy(Seller $seller)
    {
        $seller->delete();
        return redirect()->route('stands.index')->with('success', 'Seller deleted successfully.');
    }
}
