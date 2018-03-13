<?php

namespace App\Http\Controllers;
use App\Product;
use App\Slide;
use App\ProductType;
use Illuminate\Http\Request;

class InitController extends Controller
{
    public function __construct()
    {
        $listSlide = Slide::all();
        $listProduct = Product::get();
        $listCategory = ProductType::get();

        view()->share('listProduct', $listProduct);
        view()->share('listCategory', $listCategory);
    }
}
