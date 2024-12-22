@extends('layout.admin')

@section('judul', 'Admin|Add-Transaction')
@section('halaman', 'Tambah Transaksi ')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Tambah Transaksi</h1>
        <div class="w-full mt-8">
            <form action="{{ route('added-transaction') }}" method="POST"
                class="bg-white rounded-lg shadow-lg w-full border p-8">
                @csrf
                <div>
                    <label class="text-gray-800 font-semibold block mt-5 text-md" for="item_id">Item/Barang</label>
                    <select id="item_id" name="item_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Item</option>
                        @foreach ($selectItemForInput as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('item_id')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mt-3 text-md" for="quantity">Banyaknya barang</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="quantity"
                        id="quantity" placeholder="banyak barang" />
                    @error('quantity')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mt-5 text-md" for="status">Tambah/Kurang</label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Item</option>
                        <option value="addition">Tambah</option>
                        <option value="subtraction">Kurang</option>
                    </select>
                    @error('status')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block mt-3 text-md" for="notes">Catatan</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="notes"
                        id="notes" placeholder="catatan" />
                    @error('notes')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                    class="mt-8 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>

            </form>
        </div>
    </div>


@endsection
