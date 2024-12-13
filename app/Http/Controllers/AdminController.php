<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $items = Item::with('stocks')->get();

        return view('admin.menage-item' , compact('items'));
    }

    public function showTransaction()
    {
        return view('admin.transaction');
    }

    public function showAddedStaff()
    {
        return view('admin.added-staff');
    }

    public function addedStaff(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ],[
            'name.required' => 'field nama harus di isi',
            'email.required' => 'field email harus di isi',
            'password.required' => 'field password harus di isi'
        ]);

        $staff = 'staff';

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $staff,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/menage-staff');

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
