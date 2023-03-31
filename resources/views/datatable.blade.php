@extends('layouts.tablelayout')

@section('content')
    <div id="dataTable" class="">
        {{-- START OF DASHBOARD TABLE --}}

        <h1 class="text-orange-900 font-bold text-4xl px-20">
            <span class="text-orange-500">Da</span>ta Table
        </h1>
        <div class="border p-2 bg-gray-100 mt-4 rounded-lg w-full sm:w-3/4 m-auto" id="table">Table</div>
        <div class="card-body w-full sm:w-3/4 m-auto">
            <div class="h-screen">
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
                                    class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
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
                                        <p class="w-64 truncate"> {{ $item->description }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->category }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $item->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">

                                        <a href="{{ '/editproduct/' . $item['id'] }}"
                                            class="text-indigo-500 px-3">Update</a>
                                        <a onclick="confirmation(event)" href="" class="text-red-500">Delete</a>
                                        {{-- {{"delete/".$item['id']}} --}}

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="flex flex-col justify-center items-center mt-4">
                    {{ $products->links() }} <a href="/home" class="mt-2 underline text-blue-500">Back to home</a>
                </div>
            </div>
        </div>
    </div>

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

                    window.location.href = '{{ '/delete/' . $item['id'] }}';
                } else {
                    // Handle the cancel button
                    swal({
                        icon: 'success',
                        text: "Your product is safe!",
                    });
                }
            });
        }
    </script>
@endsection
