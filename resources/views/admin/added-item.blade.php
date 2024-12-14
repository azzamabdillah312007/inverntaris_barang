@extends('layout.admin')

@section('judul', 'Admin|Add-Item')
@section('halaman', 'Tambah Barang ')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Tambah Barang</h1>

        <!-- component -->
        <!-- component -->
        <!-- Create by joker banny -->
        <div class="w-full mt-8">
            <form action="{{ route('added-item') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-lg w-full border p-8">
                @csrf
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Nama</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name"
                        id="name" placeholder="name" />
                    @error('name')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="price">Harga</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="price"
                        id="price" placeholder="harga" />
                    @error('price')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="image">Gambar</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        name="image" id="file_input" type="file">
                    @error('image')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="description">Deskripsi</label>
                    <textarea class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="description"
                        id="description" placeholder="deskripsi barang"></textarea>
                    @error('description')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit"
                    class="mt-8 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>

            </form>
        </div>
    </div>


@endsection