<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use App\ProductType;
use Illuminate\Http\Request;
use DB;

class PageController extends InitController
{
    public function index()
    {
        $listSlide = Slide::all();
        $listProduct = Product::get();
        $listCategory = ProductType::get();
        $data = [
            'listSlide'     => $listSlide,
            'listProduct'    => $listProduct,
            'listCategory'   => $listCategory
        ];

        return view('page.index', $data);
    }

    public function detail($slug)
    {
        $productData = DB::table('g_products')->where('slug', $slug)->first();
        //$productData = Product::where('slug', $slug)->first;
        $data = [
            'productData'     => $productData
        ];
        return view('page.detail', $data);
    }

    public function list()
    {
        return view('page.list');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function get($id)
    {
        $listSlide = Slide::all();
        $newProduct = Product::where('new', 1)->paginate(4, ['*'], 'new');
        $saleProduct = Product::where('promotion_price', '<>', 0)->paginate(4, ['*'], 'sale');
        $data = [
            'list_slide'     => $listSlide,
            'new_product'    => $newProduct,
            'sale_product'   => $saleProduct
        ];
        $response = array(
            'status'    => 'RESULT_OK',
            'message'   => 'Success',
            'id'        => $id,
            'data'      => $data
        );

        return response($response, 200);
    }
}
