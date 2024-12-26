<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Location;
use App\Models\Categorie;
use App\Models\Sub_Categorie;
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

    public function showMenageitem()
    {
        $items = Item::with('subCategorie')->get();
        
        return view('staff.menage-item', compact('items'));
    }

    public function showAddedItem()
    {
        $subcategories = Sub_Categorie::all();

        return view('staff.added-item' , compact('subcategories'));
    }

    public function addedItem(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2098',
            'description' => 'required|string',
            'sub_category_id' => 'required|string'
        ], [
            'name.required' => 'nama barang wajib di isi',
            'price.required' => 'harga barang wajib di isi',
            'stock.required' => 'stok barang wajib di isi',
            'image.required' => 'gambar barang wajib di isi',
            'image.image' => 'File yang harus di unggah harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpeg , png , jpg',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
            'description.required' => 'deskripsi barang wajib di isi',
            'sub_category_id' => 'sub kategori barang wajib di pilih'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Item::create([
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect('staff/menage-item');
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
