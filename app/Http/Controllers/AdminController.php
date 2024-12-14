<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Stock;
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
        $staff = User::where('role','staff')->get();

        return view('admin.menage-staff' , compact('staff'));
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


    public function showDetailItem(Request $request , string $id){

        $item = Item::where('id',$id)->get();
        $stock = Item::with('stocks')->get();

        $quantities = $item->map(function ($item) {
            return $item->stocks->sum('quantity');
        });

        return view('admin.detail-item' , compact('item','quantities'));
    }

    public function addStock(Request $request, $itemId){
        // dd($request);

        $request->validate([
            'quantity' => 'required|integer'
        ]);

        Stock::updateOrCreate(
            [
                'item_id' => $itemId,
                'location_id' => '1',
            ],

            // data yang mau di buat atau di update harus di array yang kedua jadi di pisahkan
            [
                'quantity' => $request->quantity,
            ]
        );

        return redirect("admin/menage-item/$itemId/detail");
    }


    public function showAddedItem(){

        return view('admin.added-item');
    }

    public function addedItem(Request $request){

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2098',
            'description' => 'required|string',
        ],[
            'name.required' => 'nama barang wajib di isi',
            'price.required' => 'harga barang wajib di isi',
            'image.required' => 'gambar barang wajib di isi',
            'image.image' => 'File yang harus di unggah harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpeg , png , jpg',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
            'description.required' => 'deskripsi barang wajib di isi',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Item::create([
            'sub_category_id' => '1',
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'price' => $request->price,
        ]);

        return redirect('admin/menage-item');



        // dd($request);
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
