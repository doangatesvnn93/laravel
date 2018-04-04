<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends \App\Http\Controllers\InitController
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

    public function list(Request $request)
    {
        $listCategory = Category::where('status', '<>', null)->paginate(10);
        $data = array(
            'listCategory' => $listCategory
        );
        return view('admin.category.list', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->name ? $request->name : '';
            $status = $request->status ? $request->status : 1;
            $data = array(
                'name' => $name,
                'status' => $status,
                'slug' => $this->removeSign($name, '-', true)
            );

            if ($name) {
                Category::create($data);
                $this->setFlashData('success', trans('message.commons.successfully'));
            } else {
                return view('admin.category.create', $data);
            }
        }
        return view('admin.category.create');
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
    {   $request = request();
        $data = Category::where('id', $id)->first();
        if (!$data) {
            return redirect(route('404'));
        }

        if ($request->isMethod('post')) {
            $name = $request->name ? $request->name : $data->name;
            $status = $request->status;
            $obj = array(
                'name' => $name,
                'status' => $status,
                'slug' => $this->removeSign($name, '-', true)
            );

            if ($name) {
                Category::where('id', $id)->update($obj);
                $this->setFlashData('success', trans('message.commons.successfully'));
                return redirect(route('category-list'));
            } else {
                return view('admin.category.edit', ['data' => $data]);
            }
        }
        return view('admin.category.edit', ['data' => $data]);
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
