@extends('layouts.prodlayout')
@section('content')
    <div id="burger">
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Bu</span>rger
            Section</h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($burger as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">{{ $item->name }}</h2>
                            <p class="text-gray-700"><span class="text-sm text-black">{{ $item->description }}</p>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Fr</span>ies
            Section</h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($fries as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-105 sm:hover:scale-110 ">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">{{ $item->name }}</h2>
                            <p class="text-gray-700"><span class="text-sm text-black">{{ $item->description }}
                            </p>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
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
                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700  hover:scale-105 sm:hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">{{ $item->name }}</h2>
                            <p class="text-gray-700"><span class="text-sm text-black">{{ $item->description }}
                            </p>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
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
                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700  hover:scale-105 sm:hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">{{ $item->name }}</h2>
                            <p class="text-gray-700"><span class="text-sm ">{{ $item->description }}</p>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
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
                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700  hover:scale-105 sm:hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">{{ $item->name }}</h2>
                            <p class="text-gray-700"><span class="text-sm">{{ $item->description }}</p>
                        </div>
                        <div class="w-1/2">
                            <img src="{{ asset('uploads/images/' . $item->images) }}" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
