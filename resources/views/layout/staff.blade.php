<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>


<body>
    <div class=" min-h-screen">

        {{-- sidebar --}}
        <div class="sidebar top-0 bottom-0 left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 fixed">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center">
                    <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
                    <h1 class="font-bold text-gray-200 text-[15px] ml-3">Staff</h1>
                </div>
                <div class="my-2 bg-gray-600 h-[1px]"></div>
            </div>
            <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                <i class="bi bi-search text-sm"></i>
                <input type="text" placeholder="Search"
                    class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <a href="/staff/dashboard" class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-bookmark-fill"></i>
                <a href="/staff/menage-item" class="text-[15px] ml-4 text-gray-200 font-bold">Pengelola item</a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-bookmark-fill"></i>
                <a href="/staff/menage-location" class="text-[15px] ml-4 text-gray-200 font-bold">Pengelola lokasi</a>
            </div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-bookmark-fill"></i>
                <a href="/staff/transaction" class="text-[15px] ml-4 text-gray-200 font-bold">Transaksi barang</a>
            </div>
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-box-arrow-in-right"></i>
                <a href="/logout" class="text-[15px] ml-4 text-gray-200 font-bold">Logout</a>
            </div>
        </div>



        {{-- main content --}}
        <div class="main-content ml-[300px]">
            <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
                <div class="flex-1 flex justify-between items-center">
                    <a href="#" class="text-xl">@yield('halaman')</a>
                </div>

                <label for="menu-toggle" class="pointer-cursor md:hidden block">
                    <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
                <input class="hidden" type="checkbox" id="menu-toggle" />

                <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
                    <nav>
                        <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                            <li><a class="md:p-4 py-3 px-0 block" href="#">AboutUs</a></li>
                            <li><a class="md:p-4 py-3 px-0 block" href="#">Treatments</a></li>
                            <li><a class="md:p-4 py-3 px-0 block" href="#">Blog</a></li>
                            <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            @yield('body')
        </div>
    </div>


</body>

</html>
