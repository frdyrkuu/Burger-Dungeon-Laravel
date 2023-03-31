@extends('layouts.prev')
@section('content')
    <section class="flex flex-col-reverse justify-center lg:flex-row p-6 items-center gap-4 mb-12 -mt-42">
        <article class="lg:w-3/4 w-full">
            <h1 class="text-4xl font-extrabold text-center lg:text-left lg:text-6xl text-orange-500 animate-reveal w-full">
                {{ $product->name }}
            </h1>
            <br>
            <h2 class="font-['Poppins'] text-1xl sm:text-xl text-gray-800 text-center lg:text-left animate-reveal-x">
                {{ $product->description }}
            </h2>
            <br>
        </article>
        <div class="w-11/12 lg:w-5/4 animate-reveal">
            <img class="animate-floating w-5/4 sm:w-full  h-3/4 m-auto sm:m-none"
                src="{{ asset('uploads/images/' . $product->images) }}" alt="{{ $product->name }}">
        </div>
    </section>
@endsection
