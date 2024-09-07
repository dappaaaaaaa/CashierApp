<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier App</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="min-h-full w-full"> <!-- Background -->
        <div class="px-16 py-8"> <!-- Padding from background -->
            <div class="flex"> <!-- Layouting -->
                <div class="w-full">
                    <div class="flex gap-2">
                        <div class="flex w-3/4 overflow-y-auto max-h-screen">
                            <div>
                                <h1 class="text-4xl font-bold pb-8 text-center">Pilih Menu</h1>
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
                        </div>
                        <div class="flex-row w-1/4 border-separate">{{-- Right Content --}}
                            <div class="h-[60vh] w-full border border-black py-4 px-2"> {{-- Ordered Menu --}}
                                <h1 class="font-bold text-xl pb-4">Menu yang dipesan</h1>
                            </div>
                            <div class="h-1/4 w-full border border-black py-4 px-2">
                                <h1 class="font-bold text-xl pb-4">Harga Total</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
