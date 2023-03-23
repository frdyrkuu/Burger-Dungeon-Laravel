@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/css/app.css')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <button
                            class="p-3 py-2 rounded-2xl text-orange-500  font-bold underline hover:scale-110 ml-14 sm:float-right"
                            id="btnShow" title="&#9999 Manage your exixting products here" onclick="showUpload()">+ Add
                            Product</button>
                        <br>
                        <div class="mt-2">
                            <h1 class="font-bold">Welcome to Administrative Dashboard</h1>
                            <h2>You can Edit and Add your products here.</h2>
                        </div>
                    </div>
                </div>

                {{-- SECTION FOR UPLOAD PRODUCTS --}}
                {{-- grid --}}
                <div id="showUpload" class="hidden grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="card mt-2 rounded-2xl h-fit">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Upload</h1>
                        <div class="p-6">
                            <form method="POST" action="/upload" enctype="multipart/form-data">
                                @csrf
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none p-2"
                                    type="file" name="image" accept="image/png" onchange="loadFile(event)" required>
                                <div class="w-64 h-64 flex m-auto justify-center mt-4">
                                    <img src="/img/icon-upload.png" alt="" class="h-64 my-4  w-64" id="output">
                                </div>
                                <p class="text-gray-400 mt-4 text-center">Note: PNG file only.</p>

                        </div>
                    </div>


                    <div class="grid card mt-2 rounded-2xl h-11/12">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Details</h1>
                        <div class="p-6">

                            <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 ">Product
                                Name:</label>
                            <input type="text" name="product_name" id=""
                                class="bg-gray-50 p-2 px-2 rounded-xl border border-gray-400 w-full" required>


                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 mt-3">Details:</label>
                            <textarea id="message" rows="8" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 "
                                placeholder="Write your product description here..." required></textarea>


                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 mt-3">Select an
                                option:</label>
                            <select id="countries" name="product"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                                required>
                                <option value="" disabled selected required>Select a category</option>
                                <option value="burger">Burger</option>
                                <option value="fries">Fries</option>
                                <option value="barbeque">Barbeque</option>
                                <option value="drinks">Drinks</option>
                                <option value="icecream">Ice Cream</option>
                            </select>

                            <input type="submit" name="upload"
                                class="bg-orange-500 rounded-xl px-4 py-2 text-white w-full mt-5">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END OF UPLOAD PRODUCTS  --}}

        </div>



        <div id="showTable">

            <div class="flex flex-col lg:flex-row lg:flex-wrap lg:-mx-2 mt-4 w-3/4 justify-center m-auto gap-2">

                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">Burger</h2>
                            <p class="text-gray-700 text-center"><span class="text-7xl text-orange-500">
                                    {{ $burgerCount }}</span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="/img/burger-fries.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">Fries</h2>
                            <p class="text-gray-700 text-center"><span
                                    class="text-7xl text-orange-500">{{ $friesCount }}</span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="/img/fires-card.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">Barbeque</h2>
                            <p class="text-gray-700 text-center"><span
                                    class="text-7xl text-orange-500">{{ $barbequeCount }}</span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="/img/chicken-card.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">Drinks</h2>
                            <p class="text-gray-700 text-center"><span
                                    class="text-7xl text-orange-500">{{ $drinksCount }}</span><br>In
                                counts</p>

                        </div>
                        <div class="w-1/2">
                            <img src="/img/drinks-card.png" alt="Ice Cream" class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3 lg:px-2 mb-4">
                    <div
                        class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110">
                        <div class="w-1/2 pr-4">
                            <h2 class="text-2xl text-orange-900 font-bold mb-2">Ice Cream</h2>
                            <p class="text-gray-700 text-center"><span
                                    class="text-7xl text-orange-500">{{ $icecreamCount }}</span><br>In
                                counts</p>
                        </div>
                        <div class="w-1/2">
                            <img src="/img/icecream-card.png" alt="Ice Cream"
                                class="rounded-lg hover:animate-waving-hand">
                        </div>
                    </div>
                </div>


            </div>


            {{-- START OF DASHBOARD TABLE --}}
            <div class="border p-2 bg-gray-100 mt-4 rounded-lg w-full sm:w-3/4 m-auto" id="table">Table</div>

            <div class="card-body h-3/4 w-full sm:w-3/4 m-auto">
                <div class="h-3/4 overflow-y-auto relative">
                    <div class="overflow-x-auto shadow-2xl">
                        <table class="table-auto min-w-full divide-y divide-gray-200  rounded-2xl">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Product Name</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Image</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>

                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-sm">
                                @foreach ($products as $item)
                                    <tr class="bg-white border-b">
                                        <td scope="row" class="px-6 py-4 font-bold text-orange-500">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex-shrink-0 h-20 w-20">
                                                <img src="{{ asset('uploads/images/' . $item->images) }}" class=""
                                                    alt="{{ $item->name }}">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->description }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->category }}
                                        </td>

                                        <td class="px-6 py-4">
                                            {{ $item->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="text" value=" {{ $item->id }}" hidden>
                                            <button class="text-blue-500 hover:text-blue-700 mr-2">Edit</button>
                                            <button class="text-red-500 hover:text-red-700"
                                                onclick="deleteData({{ $item->id }})">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        {{-- END OF DASHBOARD TABLE --}}

        <button id="scroll-btn" onclick="scrollToBottom()"
            class="fixed bottom-4 right-4 rounded-full bg-orange-500 text-white w-15 h-15 flex items-center justify-center mb-10 animate-bounce">
            <svg viewBox="0 0 24 24" width="48px" height="48px">
                <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
            </svg>
        </button>

    </div>
@endsection
<script src="/display.js"></script>
<script src="/swal.js"></script>
