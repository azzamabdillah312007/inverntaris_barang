@extends('layout.staff')

@section('judul', 'Staff|Add-Item-In_location')
@section('halaman', 'Tambah Item Di Lokasi Penyimpanan')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Tambah Item Di Lokasi Penyimpanan</h1>

        <div class="w-full mt-8">
            <form action="{{ route('staff.added-item-in-location') }}" method="POST"
                class="bg-white rounded-lg shadow-lg w-full border p-8">
                @csrf
                <div>
                    <label class="text-gray-800 font-semibold block mt-5 text-md" for="item">item</label>
                    <select id="item" name="item"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih item</option>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('item')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-800 font-semibold block mt-5 text-md" for="location">Lokasi</label>
                    <select id="location" name="location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih lokasi</option>
                        @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }} - {{ $location->location }}</option>
                        @endforeach
                    </select>
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
