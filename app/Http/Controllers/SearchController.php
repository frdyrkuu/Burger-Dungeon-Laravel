<?php

namespace App\Http\Controllers;


use App\Models\Products;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Products::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->paginate(5);

        $results->appends(['query' => $query]);

        return view('search', compact('results'));
    }
}
