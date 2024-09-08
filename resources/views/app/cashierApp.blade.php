<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier App</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="">
    <div class="min-h-full w-full"> <!-- Background -->
        <div class="px-16 py-8"> <!-- Padding from background -->
            <div class="flex"> <!-- Layouting -->
                <div class="w-full">
                    <h1 class="text-4xl font-bold pb-8 text-center border-b border-black">Aplikasi Kasir</h1>
                    <div class="flex gap-8 pt-8 justify-center">
                        <div class="flex w-3/4 overflow-y-auto max-h-screen">
                            <div class="flex flex-wrap justify-center items-center gap-4">
                                <!-- Menu / Left Content -->
                                @foreach ($adm as $am)
                                    <div
                                        class="flex flex-col w-[40vh] justify-center p-4 space-y-2 items-center border border-black">
                                        <!-- Menu List -->
                                        <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-28" alt="img">
                                        <p class="text-center text-black font-bold text-2xl">{{ $am->nama_menu }}
                                        </p>
                                        <p class="text-center text-black text-base">Rp.{{ $am->harga }}</p>
                                        <div class="flex gap-2 items-center justify-center">
                                            <a
                                                class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                            <a
                                                class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex-row w-1/4"> <!-- Right Content -->
                            <div class="h-fit w-full border border-black py-4 px-4 space-y-1"> <!-- Ordered Menu -->
                                <h1 class="font-bold text-xl text-center">Menu yang dipesan</h1>
                                <!-- List Oredered Menu -->
                                <div class="flex flex-col gap-4 p-4 border border-gray-300 rounded-lg">
                                    <!-- Ordered Item Row -->
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col items-start">
                                            <p class="font-bold">Menu 1</p>
                                            <p class="font-light">10,000 x 2</p>
                                        </div>
                                        <p>Rp. 20,000</p>
                                    </div>
                                    <!-- Delete Button Row -->
                                    <div class="flex justify-end">
                                        <button
                                            class="material-symbols-outlined text-red-500 hover:text-red-700 cursor-pointer">
                                            delete
                                        </button>
                                    </div>
                                </div>



                                {{-- <table class="w-full text-center space-y-12">
                                    <tr class="">
                                        <th class="text-sm">Pesanan</th>
                                        <th class="text-sm">Harga Awal</th>
                                        <th class="text-sm">Jumlah</th>
                                        <th class="text-sm">Harga Akhir</th>
                                    </tr>
                                    <tr>
                                        <td class="text-sm">Menu 1</td>
                                        <td class="text-sm">10000</td>
                                        <td class="text-sm">2</td>
                                        <td class="text-sm">20000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm">Menu 1</td>
                                        <td class="text-sm">10000</td>
                                        <td class="text-sm">2</td>
                                        <td class="text-sm">20000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm">Menu 1</td>
                                        <td class="text-sm">10000</td>
                                        <td class="text-sm">2</td>
                                        <td class="text-sm">20000</td>
                                    </tr>
                                </table> --}}
                            </div>
                            <div class="h-max w-full border border-black py-4 px-2">
                                <h1 class="font-bold text-xl pb-4">Harga Total</h1>
                                <p class="text-xl"> Rp.20.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
