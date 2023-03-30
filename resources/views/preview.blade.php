@extends('layouts.prev')
@section('content')
    <div class="container animate-reveal m-auto">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('uploads/images/' . $product->images) }}" alt="Image" class="sm:mt-5 w-full lg:w-1/3 h-72 object-contain mb-4 animate-reveal-x animate-floating">
            <h1 class="text-5xl font-bold mb-2 text-orange-900 animate-reveal-x text-center mt-10 w-full md:w-1/2">{{$product->name}}</h1>
            <p class="text-gray-900 text-justify sm:w-3/4 p-4 animate-reveal text-xl">{{$product->description}}</p>
        </div>
    </div>
@endsection

