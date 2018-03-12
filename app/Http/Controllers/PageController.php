<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $listSlide = Slide::all();
        $newProduct = Product::where('new', 1)->paginate(8, ['*'], 'new');
        $saleProduct = Product::where('price_sale', '<>', 0)->paginate(4, ['*'], 'sale');
        $data = [
            'listSlide'     => $listSlide,
            'newProduct'    => $newProduct,
            'saleProduct'   => $saleProduct
        ];

        return view('page.index', $data);
    }

    public function detail()
    {
        return view('page.detail');
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
