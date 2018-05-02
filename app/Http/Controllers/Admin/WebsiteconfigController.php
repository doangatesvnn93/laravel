<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\WebsiteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteconfigController extends \App\Http\Controllers\InitController
{
    public function create()
    {
        $request = request();
        if ($request->isMethod('post')) {
            $content = array(
                'address'       => $request->address,
                'phone'         => $request->phone,
                'email'         => $request->email,
                'newsletter'    => $request->newsletter,
                'description'   => $request->description,
            );
            WebsiteConfig::create(array(
                'content'  => json_encode($content),
                'language' => $this->_language
            ));
            \library\helper::setFlashData('success', 'Successfully!');
        }
        return view('admin.websiteconfig.create');
    }

    public function list()
    {
        $data = WebsiteConfig::first();
        if ($data) {
            return redirect(route('websiteconfig-edit', array('id' => $data->id)));
        } else {
            return redirect(route('websiteconfig-create'));
        }
    }

    public function edit($id)
    {
        $request = request();
        if ($request->isMethod('post')) {
            $content = array(
                'address'       => $request->address,
                'phone'         => $request->phone,
                'email'         => $request->email,
                'description'   => $request->description,
                'card_number'   => $request->cardNumber,
                'bank'          => $request->bank
            );
            WebsiteConfig::where('id', $id)->update(array(
                'content'   => json_encode($content)
            ));
            $this->setFlashData('success', 'Successfully!');
        }
        $data = WebsiteConfig::where('id', $id)->first();
        return view('admin.websiteconfig.edit', array('data' => $data));
    }
}
