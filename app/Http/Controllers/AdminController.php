<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Item;
use App\Models\Location;
use App\Models\User;
use App\Models\Stock;
use App\Models\Sub_Categorie;
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
        $staff = User::where('role', 'staff')->get();

        return view('admin.menage-staff', compact('staff'));
    }

    public function showMenageitem()
    {
        $items = Item::with('stocks')->get();

        return view('admin.menage-item', compact('items'));
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
        ], [
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


    public function showDetailItem(Request $request, string $id)
    {

        $item = Item::where('id', $id)->get();
        $stock = Item::with('stocks')->get();

        $quantities = $item->map(function ($item) {
            return $item->stocks->sum('quantity');
        });

        return view('admin.detail-item', compact('item', 'quantities'));
    }

    public function addStock(Request $request, $itemId)
    {
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


    public function showAddedItem()
    {

        return view('admin.added-item');
    }

    public function addedItem(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2098',
            'description' => 'required|string',
        ], [
            'name.required' => 'nama barang wajib di isi',
            'price.required' => 'harga barang wajib di isi',
            'stock.required' => 'stok barang wajib di isi',
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
            'stock' => $request->stock,
        ]);

        return redirect('admin/menage-item');
    }


    public function showCategory()
    {

        $categories = Categorie::all();

        return view('admin.menage-category', compact('categories'));
    }

    public function showSubCategory()
    {

        $sub_category = Sub_Categorie::all();

        return view('admin.menage-sub_category', compact('sub_category'));
    }

    public function showAddCategory()
    {


        return view('admin.added-category');
    }

    public function addedCategory(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ], [
            'name.required' => 'nama kategori wajib di isi',
            'description.required' => 'deskripsi kategori wajib di isi',
        ]);

        Categorie::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('admin/menage-category');
    }

    public function showAddSubCategory()
    {

        $categoryForSelectInput = Categorie::all();

        return view('admin.added-sub_category', compact('categoryForSelectInput'));
    }

    public function addedSubCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string',
        ], [
            'name.required' => 'nama kategori wajib di isi',
            'category_id.required' => 'kategori wajib di isi',
            'description.required' => 'deskripsi kategori wajib di isi',
        ]);

        Sub_Categorie::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('admin/menage-sub_category');
    }

    public function showLocation()
    {
        $location = Location::all();

        return view('admin.menage-location' , compact('location'));
    }

    public function showAddLocation()
    {
        return view('admin.added-location');
    }

    public function addedLocation(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ], [
            'name.required' => 'nama lokasi wajib di isi',
            'description.required' => 'deskripsi lokasi wajib di isi',
        ]);

        Location::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('admin/menage-location');
    }

}
