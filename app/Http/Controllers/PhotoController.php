<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function create()
    {
        return  view('upload');
    }

    public function store(Request $request)
    {

        $name = $request->file('image')->getClientOriginalName();
        $new_image_name = uniqid("IMG_", false);
        $final_image_name = $new_image_name . "." . $name;

        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $category = $_POST['product'];

        $request->file('image')->store('public/images/');
        $photo = new Products();
        $photo->name = $product_name;
        $photo->description = $description;
        $photo->category = $category;
        $photo->images = $final_image_name;

        $photo->save();
        return redirect()->back();
    }
}
