@extends('layout.admin')

@section('judul', 'Admin|Add-Location')
@section('halaman', 'Tambah Lokasi Penyimpanan')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Tambah Lokasi</h1>

        <!-- component -->
        <!-- component -->
        <!-- Create by joker banny -->
        <div class="w-full mt-8">
            <form action="{{ route('added-location') }}" method="POST" class="bg-white rounded-lg shadow-lg w-full border p-8">
                @csrf
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="name">Nama lokasi</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="name"
                        id="name" placeholder="misal (gudang depan)" />
                    @error('name')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="location">Detail lokasi</label>
                    <textarea class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="location"
                        id="location" placeholder="misal (rak 1)"></textarea>
                    @error('location')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="mt-8 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
            </form>
        </div>
    </div>


@endsection
