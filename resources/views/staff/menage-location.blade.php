@extends('layout.staff')

@section('judul', 'Staff|Menage-Location')
@section('halaman', 'Pengelola lokasi')


@section('body')
    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Table Lokasi</h1>

        <div class="flex justify-between mt-5">
            <input type="text" id="first_name"
                class=" w-[30%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Cari berdasarkan nama categori" required />
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><a
                    href="/staff/menage-location/added-item-in-location">Tambah item di lokasi #</a></button>
        </div>
        {{-- table staff --}}
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mt-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama Lokasi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Detail lokasi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @foreach ($location as $location)
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="font-medium text-gray-700">{{ $location->name }}</div>
                            </th>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                    {{ $location->location }}
                                </span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
