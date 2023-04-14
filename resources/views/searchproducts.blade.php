@extends('layouts.prodlayout')

@section('content')
    <hr id="burger" class="mx-auto invisible w-1/2 h-1">

    <div>
        <h1 class="text-xl sm:text-2xl font-bold text-orange-500 my-5 p-2"><span class="text-orange-900">Tr</span>ying to
            search related to <span class="italic text-orange-900 underline">{{ $query }}</span></h1>
        <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 justify-center m-auto">
            @if (count($results) > 0)
                @foreach ($results as $item)
                    <div class="content lg:w-1/3 lg:px-2 mb-4 text-center hidden">
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

                    {{-- LOADER --}}
                    <div class="loader lg:w-1/3 lg:px-2 mb-4 text-center animate-pulse">
                        <div class="rounded-lg p-4 flex flex-col items-center">
                            <div class="w-full h-40">
                                {{-- IMAGE LOADER --}}
                                <div class="w-32 h-32 overflow-hidden rounded-full m-auto bg-gray-200">
                                    <img class="animate-floating w-full h-full object-cover m-auto"
                                        src="/img/nyan-cat-cropped.gif" alt="burger">
                                </div>
                                <p class="m-auto text-gray-500 text-sm mt-4">Please wait... ฅ ̳͒•ˑ̫• ̳͒ฅ♡</p>
                            </div>
                            <div class="w-full mt-4 mb-2">
                                {{-- NAME LOADER --}}
                                <div class="bg-gray-200 rounded-2xl w-64 h-7 m-auto"></div>

                            </div>
                            <div class="w-full">
                                {{-- DESCRIPTION LOADER --}}
                                <div class="bg-gray-200 rounded-2xl w-50 h-3 my-2"></div>
                                <div class="bg-gray-200 rounded-2xl w-64 h-3"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="justify-center items-center flex flex-col">
                    <div class="w-32 h-32 overflow-hidden rounded-full mx-auto -mb-16 bg-gray-200">
                        <img class="w-full h-full object-cover m-auto" src="/img/sad-cat.png" alt="burger">
                    </div>
                    <h2 class="m-auto text-center text-lg mt-20 text-orange-500 font-semibold">Nothing found here</h2>
                </div>
            @endif

        </div>
    </div>



    <div class="flex flex-col justify-center items-center m-auto mt-20 ">
        <form action="{{ url('/searchproducts') }}" class="animate-reveal  m-auto w-4/5 md:w-1/2">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" name="query" value="{{ app('request')->input('query') }}"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search more . . ." required>
                <button type="submit" value="search"
                    class="text-white absolute right-2.5 bottom-2.5 border-b-2 border-orange-700 bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
        <a href="/productlist" class="text-orange-900 underline mt-2">See more</a>
    </div>

    <hr id="fries" class="mx-auto bg-orange-900 w-1/2 h-1 my-32">

    <script src="/loader.js"></script>
    <hr id="drinks" class="mx-auto bg-transparent w-1/2 h-1 my-10 border-transparent">
@endsection
