<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('stocks')->get();

        $names = $items->pluck('name'); 
        
        $quantities = $items->map(function ($item) {
            return $item->stocks->sum('quantity');
        });

        return view('admin.dashboard', compact('names', 'quantities'));
    }

    public function showMenageStaff()
    {
        return view('admin.menage-staff');
    }

    public function showMenageitem()
    {
        $items = Item::with('subCategorie')->get();

        return view('admin.menage-item' , compact('items'));
    }

    public function showTransaction()
    {
        return view('admin.transaction');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
