<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends InitController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $listProduct = Product::where('status', '<>', 0)->paginate(10);
        return view('admin.product.list', array('listProduct' => $listProduct));
    }

    public function create()
    {
        $request = request();
        $listCategory = Category::get();
        if ($request->isMethod('post')) {
            $categoryId = $request->category_id;
            $name = $request->name;
            $avatar = $request->avatar;
            $content = $request->product_content;
            $price = $request->price;
            $colors = $request->color;
            $productColor = $request->productColor;
            $nameColor = $request->nameColor;
            $colorProductData = [];
            foreach ($colors as $key => $color) {
                $colorProductData[] = array(
                    'color' => $color,
                    'product' => $productColor[$key],
                    'name' => $nameColor[$key]
                );
            }

            Product::create(
                array(
                    'name'          => $name,
                    'slug'          => $this->removeSign($name, '-', true),
                    'category_id'   => $categoryId,
                    'price'         => $price,
                    'avatar'        => $avatar,
                    'content' => $content,
                    'color_product_data' => json_encode($colorProductData)
                )
            );
            $this->setFlashData('success', 'Successfully!');
        }
        return view('admin.product.create', array('listCategory' => $listCategory));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::where('id', $id)->first();
        $request = request();
        if ($request->isMethod('post')) {
            $categoryId = $request->category_id;
            $name = $request->name;
            $avatar = $request->avatar;
            $content = $request->product_content;
            $price = $request->price;
            $colors = $request->color;
            $productColor = $request->productColor;
            $nameColor = $request->nameColor;
            $colorProductData = [];
            foreach ($colors as $key => $color) {
                $colorProductData[] = array(
                    'color' => $color,
                    'product' => $productColor[$key],
                    'name' => $nameColor[$key]
                );
            }

            Product::where('id', $id)->update(array(
                    'name'          => $name,
                    'slug'          => $this->removeSign($name, '-', true),
                    'category_id'   => $categoryId,
                    'price'         => $price,
                    'avatar'        => $avatar,
                    'content'       => $content,
                    'color_product_data' => json_encode($colorProductData)
                )
            );
            $this->setFlashData('success', 'Successfully!');
            redirect(route('product-edit', array('slug' => $data->id)));
        }
        return view('admin.product.edit', array('data' => $data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
