@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="/display.js"></script>


    @vite('resources/css/app.css')

    {{-- SIDE HEADER  --}}
    <div class="container">

        <div class="fixed top-0 left-0 lg:flex hidden w-20 flex-col h-full  bg-white z-10 shadow-md" id="SHeader">

            <div class="flex items-center justify-center h-16 border-b">
            </div>
            <nav class="flex-1 flex flex-col overflow-y-auto text-2xl" id="navBar">
                <br><br> <br><br>
                <button class="py-10" onclick="expandHeader()"><i class="fa fa-arrow-right" id="arrow"></i></button>
                {{-- ARROW --}}

                <button onclick="showDashboard()" class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"><i
                        class="fa fa-dashboard"></i>
                    <span class="ml-3 hidden text-lg" id="dd">Dashboard</span>
                </button>

                <button onclick="showUpload()" class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"><i
                        class="fa fa-plus"></i>
                    <span class="ml-3 hidden text-lg" id="uu">Upload Product</span>
                </button> {{-- UPLOAD --}}

                <button onclick="showDataTable()" class="px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900"><i
                        class="fa fa-table"></i>
                    <span class="ml-3 hidden text-lg" id="tt">Table</span>
                </button> {{-- TABLE --}}
            </nav>
        </div>

        <div class="px-4 fixed text-2xl z-10 flex lg:hidden">
            <button onclick="revealSHeader()"><i class="fa fa-list-ul"></i></button> {{-- UL HAMBURGER --}}
        </div>
        <div class="flex-1 flex flex-col p-4">
            <!-- Content goes here -->


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="flex card bg-yellow-100 fixed z-10 w-full -ml-9 md:ml-0 md:w-1/2 opacity-90" id="dashboardCard">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }}
                            <button onclick="hideCard()"
                                class="p-3 py-2 rounded-2xl text-gray-700  font-bold  ml-14 sm:float-right float-right text-4xl">&times;
                            </button>
                            <br>
                            <div class="mt-2">
                                <h1 class="font-bold">Welcome to Administrative Dashboard</h1>
                                <h2>You can Edit and Add your products here.</h2>
                            </div>
                        </div>
                        <script>
                            setTimeout(() => {
                                dashboardCard.classList.remove("flex");
                                dashboardCard.classList.add("hidden");
                            }, 2000);
                        </script>
                    </div>

                    {{-- SECTION FOR UPLOAD PRODUCTS --}}
                    {{-- grid --}}
                    <div id="showUpload" class="hidden grid-cols-1 sm:grid-cols-2 gap-4  animate-reveal">
                        <div class="card mt-2 rounded-2xl h-fit">
                            <h1 class="text-sm mb-2 card-header text-gray-900">Upload</h1>
                            <div class="p-6">
                                <form method="POST" action="/upload" enctype="multipart/form-data">
                                    @csrf
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none p-2"
                                        type="file" name="image" accept="image/png" onchange="loadFile(event)"
                                        required>
                                    <div class="w-64 h-64 flex m-auto justify-center mt-4">
                                        <img src="/img/icon-upload.png" alt="" class="h-64 my-4  w-64"
                                            id="output">
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


                                <label for="message"
                                    class="block mb-2 text-sm font-medium text-gray-900 mt-3">Details:</label>
                                <textarea id="message" rows="8" name="description"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 "
                                    placeholder="Write your product description here..." required></textarea>


                                <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 mt-3">Select an
                                    option:</label>
                                <select id="categories" name="product"
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
                    {{-- FIX THIS TO FLEX --}}
                    <div class="lg:w-1/3 lg:px-2 mb-4">
                        <div
                            class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x">
                            <div class="w-1/2 pr-4">
                                <h2 class="text-2xl text-orange-900 font-bold mb-2">Burger</h2>
                                <p class="text-gray-700 text-center"><span class="text-7xl text-orange-500">
                                        {{ $burgerCount }}</span><br>In
                                    counts</p>
                            </div>
                            <div class="w-1/2">
                                <img src="/img/burger-fries.png" alt="Ice Cream"
                                    class="rounded-lg hover:animate-waving-hand">
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/3 lg:px-2 mb-4">
                        <div
                            class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110  animate-reveal">
                            <div class="w-1/2 pr-4">
                                <h2 class="text-2xl text-orange-900 font-bold mb-2">Fries</h2>
                                <p class="text-gray-700 text-center"><span
                                        class="text-7xl text-orange-500">{{ $friesCount }}</span><br>In
                                    counts</p>
                            </div>
                            <div class="w-1/2">
                                <img src="/img/fires-card.png" alt="Ice Cream"
                                    class="rounded-lg hover:animate-waving-hand">
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/3 lg:px-2 mb-4">
                        <div
                            class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110 animate-reveal-x">
                            <div class="w-1/2 pr-4">
                                <h2 class="text-2xl text-orange-900 font-bold mb-2">Barbeque</h2>
                                <p class="text-gray-700 text-center"><span
                                        class="text-7xl text-orange-500">{{ $barbequeCount }}</span><br>In
                                    counts</p>
                            </div>
                            <div class="w-1/2">
                                <img src="/img/chicken-card.png" alt="Ice Cream"
                                    class="rounded-lg hover:animate-waving-hand">
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/3 lg:px-2 mb-4">
                        <div
                            class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110  animate-reveal">
                            <div class="w-1/2 pr-4">
                                <h2 class="text-2xl text-orange-900 font-bold mb-2">Drinks</h2>
                                <p class="text-gray-700 text-center"><span
                                        class="text-7xl text-orange-500">{{ $drinksCount }}</span><br>In
                                    counts</p>

                            </div>
                            <div class="w-1/2">
                                <img src="/img/drinks-card.png" alt="Ice Cream"
                                    class="rounded-lg hover:animate-waving-hand">
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/3 lg:px-2 mb-4">
                        <div
                            class="bg-white shadow rounded-lg p-4 flex flex-row items-center transition duration-700 hover:scale-110  animate-reveal-x">
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

            </div>

            <div id="dataTable" class="hidden">
                {{-- START OF DASHBOARD TABLE --}}

                <h1 class="text-orange-900 font-bold text-4xl animate-reveal-x">
                    <span class="text-orange-500">Da</span>ta Table
                </h1>

                <div class="border p-2 bg-gray-100 mt-4 rounded-lg w-full sm:w-3/4 m-auto" id="table">Table</div>

                <div class="card-body w-full sm:w-3/4 m-auto animate-reveal">
                    <div class="h-96 overflow-y-auto relative">
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
                                                    <img src="{{ asset('uploads/images/' . $item->images) }}"
                                                        class="" alt="{{ $item->name }}">
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

                                                <a href="" class="text-indigo-500">Edit</a>
                                                <a onclick="confirmation(event)" href=""
                                                    class="text-red-500">Delete</a>
                                                {{-- {{"delete/".$item['id']}} --}}

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
        </div>
    </div>
    {{-- END SIDE HEADER --}}
    <script>
        function confirmation(ev) {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this item!",
                icon: "warning",
                buttons: ["Cancel", "Delete"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // Navigate to the new URL
                    window.location.href = '{{ 'delete/' . $item['id'] }}';
                } else {
                    // Handle the cancel button
                    swal("Your item is safe!");
                }
            });
        }
    </script>
    {{-- <script src="/display.js"></script> --}}
@endsection
