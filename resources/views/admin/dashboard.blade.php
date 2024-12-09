@extends('layout.admin')

@section('judul', 'Admin|Dashboard')
@section('halaman', 'Dashboard')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Stok Barang</h1>
        <div class="mt-8">
            <canvas id="myChart"></canvas>
        </div>
    </div>


    {{-- script chart,js --}}
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($name) !!},
                datasets: [{
                    label: 'Harga Barang',
                    data: {!! json_encode($price) !!},
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
