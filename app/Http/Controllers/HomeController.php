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

        $data = Products::paginate(5);

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

    public function datatable()
    {
        $data = Products::paginate(5);

        return view('datatable', ['products' => $data]);
    }

    public function delete($id)
    {

        $data = Products::find($id);
        if (!$data) abort(404);
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

    public function create()
    {
        return  view('upload');
    }

    public function store(Request $request)
    {

        if (!$request->hasFile('image')) abort(500);

        $name = $request->file('image')->getClientOriginalName();
        $new_image_name = uniqid("IMG_", false);
        $final_image_name = $new_image_name . "." . $name;

        $size = $request->file('image')->getSize();

        $filetype = $request->file('image')->getClientOriginalExtension();

        if ($size <= 2 * 1024 * 1024) {
            // The file is smaller than or equal to 2 MB (2 * 1024 * 1024 bytes)

            if ($filetype === 'png') {
                $product_name = $_POST['product_name'];
                $description = $_POST['description'];
                $category = $_POST['product'];

                if (!$product_name  || !$description || !$category)abort(500);

                    $request->file('image')->move('uploads/images/', $final_image_name);
                $photo = new Products();
                $photo->name = $product_name;
                $photo->description = $description;
                $photo->category = $category;
                $photo->images = $final_image_name;


                Alert::success('Product has been saved!', 'You successfully added a product');

                $photo->save();
                return redirect()->back();
            } else {
                Alert::error('Upload Failed!', 'Image must be on PNG format');
                return redirect()->back();
            }
        } else {
            // The file is larger than 2 MB
            Alert::error('Upload Failed!', 'Image must be on 2MB');
            return redirect()->back();
        }
    }
}
