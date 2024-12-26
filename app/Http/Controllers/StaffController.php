<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Location;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff.dashboard');
    }

    public function showMenageLocation()
    {
        $location = Location::all();

        return view('staff.menage-location', compact('location'));
    }

    public function showAddedItemInLocation()
    {        
        $items = Item::all();
        $locations = Location::all();

        return view('staff.added-item-in-location' , compact('items' , 'locations'));
    }

    public function addedItemInLocation(Request $request)
    {
        // dd($request);

        $request->validate([
            'item' => 'required|string',
            'location' => 'required|string',
        ], [
            'item.required' => 'item wajib di isi',
            'location.required' => 'lokasi wajib di isi',
        ]);

        $item = Item::where('id' , $request->item)->first();

        $item->update([
            'location_id' => $request->location,
        ]);

        return redirect('staff/menage-location');

    }
}
