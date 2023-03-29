<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

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


        return view('home', [
            'products' => $data, 'burgerCount' => $burgerCount, 'friesCount' => $friesCount,
            'barbequeCount' => $barbequeCount, 'drinksCount' => $drinksCount, 'icecreamCount' => $icecreamCount
        ]);
    }

    public function delete($id)
    {
        $data = Products::find($id);
        Alert::success('Product has been deleted!', 'You may see it on the dashboard');
        $data->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Products::find($id);

        return view('editproduct', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);

        $product->name = $request->input('newTitle');
        $product->description = $request->input('newDesc');
        $product->category = $request->input('newProduct');

        if ($request->hasFile('newImage')) {
            $name = $request->file('newImage')->getClientOriginalName();
            $new_image_name = uniqid("IMG_", false);
            $final_image_name = $new_image_name . "." . $name;

            $product->images = $final_image_name;

            $request->file('newImage')->move('uploads/images/', $final_image_name);
        }


        $product->update();

        Alert::success('Product has been updated!', 'You may see it on the dashboard');

        return redirect('/home');
    }
}
