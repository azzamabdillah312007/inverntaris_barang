@extends('layout.admin')

@section('judul', 'Admin|Transaction')
@section('halaman', 'Pengelola Transaksi')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Statistik Transaksi</h1>
        <div class="mt-8">
            <canvas id="myChart"></canvas>
        </div>
    </div>


    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Table Transaksi</h1>
        {{-- table staff --}}
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nama Pembeli</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Produk</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Total Harga</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tanggal Transaksi</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">

                            <div class="text-sm">
                                <div class="font-medium text-gray-700">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold">
                                Azzam Abdillah
                            </span>
                        </td>
                        <td class="px-6 py-4">Baju Kaos</td>
                        <td class="px-6 py-4">100.000</td>
                        <td class="px-6 py-4">Selesai</td>
                        <td class="px-6 py-4">31-03-20024</td>
                        <td class="px-6 py-4">
                            <div class="flex justify-end gap-4">
                                <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                                <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                    label: 'Total Transaksi',
                    data: [50, 45, 40, 60, 36, 29, 44, 53, 65, 60, 40, 39],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
