<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create(Request $request)
    {
        $validate = $request->validate([
            'item_name' => ['required', 'min:3'],
            'item_supplier' => ['required'],
            'item_stock' => ['required'],
        ]);
        if ($validate) {
            Item::create([
                'name' => $request->item_name,
                'supplier' => $request->item_supplier,
                'stock' => $request->item_stock
            ]);
        }
        return redirect()->route('home');
    }

    public function show()
    {
        $items = Item::all();
        return view('list', compact('items'));
    }
}
