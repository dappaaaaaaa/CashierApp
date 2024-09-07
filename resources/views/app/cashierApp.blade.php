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
    <div class="min-h-full w-full"> {{-- Background --}}
        <div class="px-16 py-8"> {{-- padding from background --}}

            <div class="flex">{{-- layouting --}}
                <div class="w-full">
<<<<<<< HEAD
                    <div class="flex gap-2">
                        <div class="flex w-3/4 overflow-y-auto max-h-screen">
                            <div>
                                <h1 class="text-4xl font-bold pb-8 text-center">Pilih Menu</h1>
                                <div class="flex-wrap flex justify-start gap-4">{{-- Menu / Left Content --}}
                                    <div
                                        class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                        {{-- Menu List --}}
                                        <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28" alt="img">
                                        <p class="text-center text-black font-bold text-2xl">Menu 1</p>
                                        <p class="text-center text-black text-base">Harga 1</p>
                                        <div class="flex gap-2 items-center justify-center">
                                            <a
                                                class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                            <a
                                                class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="flex w-3/4">
                                        @foreach ($adm as $am)
                                            <div class="flex-wrap flex justify-start gap-4">{{-- Menu / Left Content --}}
                                                <div
                                                    class="flex flex-col justify-center p-8 items-center border border-black">
                                                    {{-- Menu List --}}
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-32 h-32"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">
                                                        {{ $am->nama_menu }}</p>
                                                    <p class="text-center text-black text-base">Harga 1</p>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 2</p>
                                                    <p class="text-center text-black text-base">Harga 2</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 3</p>
                                                    <p class="text-center text-black text-base">Harga 3</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 4</p>
                                                    <p class="text-center text-black text-base">Harga 4</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 5</p>
                                                    <p class="text-center text-black text-base">Harga 5</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 6</p>
                                                    <p class="text-center text-black text-base">Harga 6</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 7</p>
                                                    <p class="text-center text-black text-base">Harga 7</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 8</p>
                                                    <p class="text-center text-black text-base">Harga 8</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 9</p>
                                                    <p class="text-center text-black text-base">Harga 9</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex flex-col justify-center p-8 space-y-2 items-center border border-black">
                                                    <img src="{{ asset('img/img1.jpg') }}" class="w-28 h-2w-28"
                                                        alt="img">
                                                    <p class="text-center text-black font-bold text-2xl">Menu 10</p>
                                                    <p class="text-center text-black text-base">Harga 10</p>
                                                    <div class="flex gap-2 items-center justify-center">
                                                        <a
                                                            class="text-red-700 text-sm border border-red-700 hover:bg-red-800 hover:text-white rounded-lg px-3 py-1.5">Kurang</a>
                                                        <a
                                                            class="text-blue-700 text-sm border border-blue-700 hover:bg-blue-800 hover:text-white rounded-lg px-3 py-1.5">Tambah</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                                <div class="flex-row w-1/4 border-separate">{{-- Right Content --}}
                                    <div class="h-max w-full border border-black py-4 px-2"> {{-- Ordered Menu --}}
                                        <h1 class="font-bold text-xl pb-4">Menu yang dipesan</h1>
                                        <div class="">
                                            <p>gantent</p>
                                            <p>gantent</p>
                                            <p>gantent</p>
                                            <p>gantent</p>
                                            <p>gantent</p>
                                        </div>
                                    </div>
                                    <div class="h-1/4 w-full border border-black py-4 px-2">
                                        <h1 class="font-bold text-xl pb-4">Harga Total</h1>
                                    </div>
                                </div>
                            </div>

=======
                    <h1 class="text-4xl font-bold pb-8 text-center">Pilih Menu</h1>
                    <a href="{{ route ('admin.tambah')}}" class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</a>
                    <div class="flex gap-2">
                        <div class="flex w-3/4">                            
                            @foreach ($adm as $am)
                            <div class="flex-wrap flex justify-start gap-4">{{-- Menu / Left Content --}}
                                <div class="flex flex-col justify-center p-8 items-center border border-black">
                                    {{-- Menu List --}}
                                    <img src="{{ asset('img/img1.jpg') }}" class="w-32 h-32" alt="img">
                                    <p class="text-center text-black font-bold text-2xl">{{$am->nama_menu}}</p>
                                    <p class="text-center text-black text-base">Rp.{{$am->harga}}</p>
                                </div>
                            @endforeach
>>>>>>> daee68aff5c7c20693ed14f791d31ebc791bf610
                        </div>


                    </div>

                </div>
            </div>
</body>

</html>
