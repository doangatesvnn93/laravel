<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends \App\Http\Controllers\InitController
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = request('name', null);
            $slug = $name ? $this->removeSign($name, '-', true) : null;
            $content = request('content', null);
            if ($name && $content) {
                Article::create(array(
                    'name' => $name,
                    'slug' => $slug,
                    'content' => $content
                ));
                $this->setFlashData();
            }
        }
        return view('admin.article.create');
    }

    public function edit($id)
    {
        $data = Article::where('id', $id)->first();
        $request = request();
        if (!$data) {
            return redirect(route('404'));
        }
        if ($request->isMethod('post')) {
            $name = request('name', null);
            $slug = $name ? $this->removeSign($name, '-', true) : null;
            $content = request('content', null);
            if ($name && $content) {
                Article::where('id', $id)->update(array(
                    'name' => $name,
                    'slug' => $slug,
                    'content' => $content
                ));
                $this->setFlashData();
                return redirect(route('article-edit', $data));
            }
        }

        return view('admin.article.edit', array('data' => $data));
    }
}
