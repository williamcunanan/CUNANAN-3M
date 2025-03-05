<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();
        return view('items', compact('items'));
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Create the new item
    Item::create([
        'name' => $request->name,
        'description' => $request->description,
    ]);

    // Redirect to the 'items.index' route with success message
    return redirect()->route('items.index')->with('success', 'Item added successfully!');
}

}
