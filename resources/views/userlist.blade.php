@extends('layouts.tablelayout')

@section('content')
    <div id="dataTable" class="">
        {{-- START OF DASHBOARD TABLE --}}
        <div class="float-right mr-60">
            <form action="{{ url('/search') }}" type="get">
                <input type="search" name="query" value="{{ app('request')->input('query') }}" placeholder="Search for User"
                    class="border border-gray-300 px-2 p-2 w-96 bg-gray-100 rounded-xl" required>
                <button type="submit" value="Search"
                    class="bg-orange-500 p-2 px-4 rounded-xl text-white font-semibold text-lg m-2">Search</button>
            </form>
        </div>
        <h1 class="text-orange-900 font-bold text-4xl ml-52 lg:px-20">
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
                                    Employees Name</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Created At</th>
                                <th class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 text-sm">
                            @foreach ($users as $item)
                                <tr class="bg-white border-b">
                                    <td scope="row" class="px-6 py-4 font-bold text-orange-500">
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ '/updateuser/' . $item['id'] }}" class="text-indigo-500 px-3">Update</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="flex flex-col justify-center items-center mt-4">
                    {{ $users->links() }}
                    <a href="/home" class="mt-2 underline text-blue-500">Back to home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
