<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Product;
use App\Slide;
use App\Category;
use App\Subscribe;
use Illuminate\Http\Request;
use DB;

class PageController extends InitController
{
    public function index()
    {
        $listSlide = Slide::where('status', 1)->get();
        $listProduct = Product::where('status', 1)->get();
        $listCategory = Category::where('status', 1)->get();
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
        $listProductRelate = DB::table('g_products')
            ->where('category_id', $productData->category_id)
            ->where('id', '<>', $productData->id)
            ->where('status', 1)
            ->limit(3)
            ->get();
        $data = [
            'productData'     => $productData,
            'listProductRelate' => $listProductRelate
        ];
        return view('page.detail', $data);
    }

    public function list(Request $request)
    {
        $listCategory = Category::where('status', 1)->get();
        $listProduct = Product::where('status', 1)->get();
        $data = [
            'listProduct'    => $listProduct,
            'listCategory'   => $listCategory
        ];
        return view('page.list', $data);
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function about()
    {
        return view('page.about');
    }

    public function get($id)
    {
        $listSlide = Slide::where('status', 1)->get();
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

    public function dilivery()
    {

    }

    public function checkout(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->fullname;
            $email = $request->email;
            $gender = $request->gender;
            $address = $request->address;
            $phone = $request->phone;
            $note = $request->notes;
            $listProduct = $request->product;
            $qty = $request->qty;
            $typePayment = $request->typePayment;
            $totalAmount = 0;
            $dataBill = array();
            foreach ($listProduct as $key => $item) {
                $dataProduct = Product::where('id', $item)->select(['id', 'price', 'name'])->first();
                $qtyItem = $qty[$key];
                $totalAmount += (int) $qtyItem * $dataProduct->price;
                $dataBill[] = array(
                    'name'  => $dataProduct->name,
                    'price' => $dataProduct->price,
                    'id'    => $dataProduct->id,
                    'qty'   => $qty[$key]
                );
            }

            if ($name && $address && $phone && $totalAmount) {
                Bill::create(array(
                    'name'          => $name,
                    'email'         => $email,
                    'gender'        => $gender,
                    'address'       => $address,
                    'phone'         => $phone,
                    'note'          => $note,
                    'total_amount'  => $totalAmount,
                    'data'          => json_encode($dataBill),
                    'type_payment'  => $typePayment
                ));
                $this->setFlashData('success', 'Đơn hàng của bạn đã được lưu');
                session()->remove('cart');
            }
        }
        return view('page.checkout');
    }

    public function subscribe(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = array(
                'status' => 'RESULT_OK'
            );
            if ($request->email) {
                Subscribe::create(
                    array(
                        'email' => $request->email,
                        'subscribe' => 1
                    )
                );
                return response($data);
            }
        }
    }

    public function subscribed()
    {
        return view('page.subscribed');
    }
}
