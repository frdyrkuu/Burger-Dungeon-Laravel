@extends('layouts.app')

@section('content')
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

                    <div class="card mt-2 rounded-2xl h-full">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Upload</h1>
                        <div class="p-6">
                            <form method="POST" action="/upload" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" accept="image/png" onchange="loadFile(event)" required>
                                <div class="w-64 h-64 flex justify-center items-center m-auto mt-2">
                                    <img src="/img/upload-icon.png" alt=""
                                        class="h-64 my-4 m-auto  object-center w-64" id="output">
                                </div>
                                <input type="submit" name="upload"
                                    class="bg-orange-500 rounded-2xl px-4 py-2 text-white w-full sm:mb-0 mb-10 mt-2">
                            </form>
                        </div>
                    </div>


                    <div class="card mt-2 rounded-2xl h-11/12">
                        <h1 class="text-sm mb-2 card-header text-gray-900">Details</h1>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
<script src="/display.js"></script>
