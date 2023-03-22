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

                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="card mt-2 rounded-2xl h-fit">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Upload</h1>
                        <div class="p-6">
                            <form method="POST" action="/upload" enctype="multipart/form-data">
                                @csrf
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none p-2"
                                    type="file" name="image" accept="image/png" onchange="loadFile(event)" required>
                                <div class="w-64 h-64 flex justify-center items-center m-auto mt-4">
                                    <img src="/img/icon-upload.png" alt=""
                                        class="h-64 my-4 m-auto  object-center w-64" id="output">
                                </div>
                                <p class="text-gray-400 mt-4 text-center">Note: PNG file only.</p>

                        </div>
                    </div>


                    <div class="card mt-2 rounded-2xl h-11/12">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Details</h1>
                        <div class="p-6">

                            <label for="product_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name:</label>
                            <input type="text" name="product_name" id=""
                                class="bg-gray-50 p-2 px-2 rounded-xl border border-gray-400 w-full" required>


                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 mt-3">Details:</label>
                            <textarea id="message" rows="8" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write your product description here..." required></textarea>


                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-3">Select an
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
        </div>
    </div>
@endsection
<script src="/display.js"></script>
