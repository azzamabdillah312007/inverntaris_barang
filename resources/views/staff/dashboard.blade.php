@extends('layout.staff')

@section('judul', 'Staff|Dashboard')
@section('halaman', 'Dashboard')


@section('body')

    <div class="p-8">
        <h1 class="text-4xl font-semibold text-gray-800">Stok Barang</h1>
        <div class="mt-8">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
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
