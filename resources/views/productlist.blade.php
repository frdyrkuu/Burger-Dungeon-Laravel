@extends('layouts.prodlayout')
<hr id="burger" class="mx-auto bg-transparent w-1/2 h-1">
@section('content')
    <div>
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Bu</span>rger
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($burger as $item)

                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <a href="/preview/{{ $item->id }}" title="🍔 Choose me!">
                        <div
                            class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                            <div class="w-full h-40">
                                <img src="{{ asset('uploads/images/' . $item->images) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                            </div>
                            <div class="w-full mt-4 mb-2">
                                <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                            </div>
                            <div class="w-full">
                                <p class="text-gray-700 text-sm truncate">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>


            @endforeach
        </div>
    </div>

    <hr id="fries" class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

    <div class="">

        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Fr</span>ies
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($fries as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <a href="/preview/{{ $item->id }}" title="🍟 Choose me!">
                        <div
                            class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                            <div class="w-full h-40">
                                <img src="{{ asset('uploads/images/' . $item->images) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                            </div>
                            <div class="w-full mt-4 mb-2">
                                <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                            </div>
                            <div class="w-full">
                                <p class="text-gray-700 text-sm truncate">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <hr id="barbeque" class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

    <div>
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Ba</span>rbeque
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($barbeque as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <a href="/preview/{{ $item->id }}" title="🍖 Choose me!">
                        <div
                            class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                            <div class="w-full h-40">
                                <img src="{{ asset('uploads/images/' . $item->images) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                            </div>
                            <div class="w-full mt-4 mb-2">
                                <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                            </div>
                            <div class="w-full">
                                <p class="text-gray-700 text-sm truncate">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <hr id="drinks" class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

    <div>
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Dr</span>inks
            Section</h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($drinks as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <a href="/preview/{{ $item->id }}" title="🍹Choose me!">
                        <div
                            class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                            <div class="w-full h-40">
                                <img src="{{ asset('uploads/images/' . $item->images) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                            </div>
                            <div class="w-full mt-4 mb-2">
                                <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                            </div>
                            <div class="w-full">
                                <p class="text-gray-700 text-sm truncate">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <hr id="icecream" class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

    <div>
        <h1 class="text-3xl sm:text-5xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Ic</span>e Cream
            Section</h1>

        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">

            @foreach ($icecream as $item)
                <div class="lg:w-1/3 lg:px-2 mb-4 text-center">
                    <a href="/preview/{{ $item->id }}" title="🍨 Choose me!">
                        <div
                            class="rounded-lg p-4 flex flex-col items-center transition duration-700 hover:scale-105 sm:hover:scale-110">
                            <div class="w-full h-40">
                                <img src="{{ asset('uploads/images/' . $item->images) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-contain rounded-lg hover:animate-waving-hand">
                            </div>
                            <div class="w-full mt-4 mb-2">
                                <h2 class="text-2xl text-orange-900 font-bold">{{ $item->name }}</h2>
                            </div>
                            <div class="w-full">
                                <p class="text-gray-700 text-sm truncate">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <hr id="drinks" class="mx-auto bg-transparent w-1/2 h-1 my-10 border-transparent">
@endsection
