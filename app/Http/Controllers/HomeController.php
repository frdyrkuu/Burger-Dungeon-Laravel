<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Products::all();

        $burgerCount = Products::where('category', 'burger')->count();
        $friesCount = Products::where('category', 'fries')->count();
        $barbequeCount = Products::where('category', 'barbeque')->count();
        $drinksCount = Products::where('category', 'drinks')->count();
        $icecreamCount = Products::where('category', 'icecream')->count();


        return view('home', ['products' => $data, 'burgerCount' => $burgerCount, 'friesCount' => $friesCount,
        'barbequeCount' => $barbequeCount, 'drinksCount' => $drinksCount, 'icecreamCount' => $icecreamCount]);
    }
}
