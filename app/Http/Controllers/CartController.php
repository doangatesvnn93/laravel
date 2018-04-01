<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $cartData = session()->get('cart', []);

            $id = $request->id;
            $product = Product::where('id', $id)->first();
            if ($product) {
                $continue = 0;
                if (!empty($cartData)) {
                    foreach ($cartData as $key => $item) {
                        if ($key == $product->id) {
                            $cartData[$key]['qty']++;
                            $continue++;
                            break;
                        }
                    }
                }
                if ($continue == 0) {
                    $cartData[$product->id] = [
                        'id' => $product->id,
                        'name'  => $product->name,
                        'price' => $product->price,
                        'avatar' => $product->avatar,
                        'qty'   => 1
                    ];
                }
                session()->put('cart', $cartData);
            }
            $data = [
                'status' => 'RESULT_OK',
                'data'  => $request->session()->get('cart')
            ];
            return response($data, 200);
        }

    }

    public function clearCart()
    {
        if (session()->has('cart')) {
            session()->remove('cart');
        }
    }
}
