@extends('layout.admin')

@section('judul', 'Admin|Detail-Item')
@section('halaman', 'Detail Barang')


@section('body')

    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            @foreach ($item as $item)
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                        src="{{ $item->image }}">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">NAMA BARANG</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $item->name }}</h1>
                        <p class="leading-relaxed">
                            {{ $item->description }}
                        </p>
                        @if ($quantities->isEmpty())
                            <h2 class="text-sm">Stock : Belum ada</h2>
                        @endif
                        @foreach ($quantities as $quantity)
                            <h2 class="text-sm">Stock : {{ $quantity }}</h2>
                        @endforeach
                        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5"></div>
                        <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">Harga : {{ $item->price }}</span>
                        </div>
                        <form action="{{ route('add-stock', $item->id) }}" method="POST" class="mt-8 flex gap-4">
                            @csrf
                            <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number"
                                name="quantity" id="quantity" placeholder="tambah stok" />
                            <button type="submit"
                                class="flex ml-auto text-white bg-indigo-800 border-0 py-2 px-6 focus:outline-none rounded-md">Tambah</button>
                            <button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
