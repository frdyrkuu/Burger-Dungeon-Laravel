<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductlistController extends Controller
{
    //
    public function List()
    {
        $burger = Products::where('category', 'burger')->get();
        $fries = Products::where('category', 'fries')->get();
        $barbeque = Products::where('category', 'barbeque')->get();
        $drinks = Products::where('category', 'drinks')->get();
        $icecream = Products::where('category', 'icecream')->get();

        return view('productlist', ['burger' => $burger, 'fries' => $fries, 'barbeque' => $barbeque, 'drinks' => $drinks,
        'icecream' => $icecream]);
    }
}
