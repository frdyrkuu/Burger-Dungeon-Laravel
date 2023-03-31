@extends('layouts.edit')

@section('content')
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-2xl m-auto mt-10">
        <div class="bg-white h-64 flex items-center justify-center">
            <img src="{{ asset('uploads/images/' . $product->images) }}" alt="Photo" class="object-contain w-full h-full"
                id="output">
        </div>
        <div class="p-6">
            <h2 class="text-xl font-bold mb-2 text-orange-500">Edit Photo</h2>
            <div class="py-5">
                <form action="/update-data/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')

                    <input type="file" onchange="loadFile(event)" accept="image/png" name="newImage">
                    <br><br>
                    <label for="newTitle">Title</label>
                    <input type="text" name="newTitle"
                        class="px-2 border border-gray-300 bg-gray-50 text-xl w-full sm:w-1/2 py-2 rounded-lg"
                        value="{{ $product->name }}">
                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 mt-3">Select an
                        option:</label>
                    <select id="categories" name="newProduct"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5"
                        required>
                        <option value="" disabled selected required>{{ $product->category }}</option>
                        <option value="burger">Burger</option>
                        <option value="fries">Fries</option>
                        <option value="barbeque">Barbeque</option>
                        <option value="drinks">Drinks</option>
                        <option value="icecream">Ice Cream</option>
                    </select>
            </div>
            <label for="newDesc">Description</label>
            <textarea name="newDesc" id="" cols="76" rows="10"
                class="block p-2.5 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500">{{ $product->description }}</textarea>
            <div class="flex items-center justify-end mt-5">
                <input type="submit"
                    class="px-4 py-2 bg-orange-500 text-white font-semibold rounded hover:bg-orange-700 mr-2"></input>
                </form>
                <a href="/home/dashboard"> <button
                        class="px-4 py-2 bg-gray-500 text-white font-semibold rounded hover:bg-gray-700 mr-2">Cancel</button></a>
            </div>


        </div>
    </div>
@endsection
