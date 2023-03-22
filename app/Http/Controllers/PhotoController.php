<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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

        $request->file('image')->move('uploads/images/', $final_image_name);
        $photo = new Products();
        $photo->name = $product_name;
        $photo->description = $description;
        $photo->category = $category;
        $photo->images = $final_image_name;

        $photo->save();
        return redirect()->back();
    }


}
