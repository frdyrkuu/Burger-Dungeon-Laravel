@extends('layouts.prodlayout')
@section('content')
    <div id="burger">

        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Bu</span>rger
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($burger as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <div
                        class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-full h-40">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                        </div>
                        <div class="w-full mt-4 mb-2">
                            <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-700 text-sm">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="" id="fries">

        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Fr</span>ies
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($fries as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <div
                        class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-full h-40">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                        </div>
                        <div class="w-full mt-4 mb-2">
                            <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-700 text-sm">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="barbeque">
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Ba</span>rbeque
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($barbeque as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <div
                        class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-full h-40">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                        </div>
                        <div class="w-full mt-4 mb-2">
                            <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-700 text-sm">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="drinks">
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Dr</span>inks
            Section</h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($drinks as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <div
                        class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-full h-40">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                        </div>
                        <div class="w-full mt-4 mb-2">
                            <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-700 text-sm">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="icecream">
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Ic</span>e Cream
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($icecream as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <div
                        class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-full h-40">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                        </div>
                        <div class="w-full mt-4 mb-2">
                            <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                        </div>
                        <div class="w-full">
                            <p class="text-gray-700 text-sm">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection