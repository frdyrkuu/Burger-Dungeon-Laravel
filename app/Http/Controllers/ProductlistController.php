<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;



class ProductlistController extends Controller
{
    public function List()
    {
        $burger = Products::where('category', 'burger')->get();
        $fries = Products::where('category', 'fries')->get();
        $barbeque = Products::where('category', 'barbeque')->get();
        $drinks = Products::where('category', 'drinks')->get();
        $icecream = Products::where('category', 'icecream')->get();

        return view('productlist', [
            'burger' => $burger, 'fries' => $fries, 'barbeque' => $barbeque, 'drinks' => $drinks,
            'icecream' => $icecream
        ]);
    }

    public function preview($id)
    {

        $product = Products::find($id);
        if (!$product) abort(404);
        return view('preview', ['product' => $product]);
    }

    public function searchproducts(Request $request)
    {

        $query = $request->input('query');

        if (!$query) return view('/welcome');

        $results = Products::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('category', 'like', '%' . $query . '%')
            ->orderBy('category', 'asc')
            ->get();


        return view('searchproducts', [
            'results' => $results, 'query' => $query
        ]);
    }
}
