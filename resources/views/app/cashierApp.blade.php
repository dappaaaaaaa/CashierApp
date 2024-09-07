<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier App</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-full w-full"> {{-- Background --}}
        <div class="px-16 py-8"> {{-- padding from background --}}

            <div class="flex">{{-- layouting --}}
                <div class="w-full">
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
                        </div>
                        <div class="flex-row w-1/4">{{-- Right Content --}}
                            <div class="h-3/4 w-full border border-black py-4 px-2"> {{-- Ordered Menu --}}
                                <h1 class="font-bold text-xl pb-4">Menu yang dipesan</h1>
                                <div class="">
                                    <p>gantent</p>

                                </div>
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