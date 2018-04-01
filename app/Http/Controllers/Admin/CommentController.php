<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
    public function list()
    {
        $listComment = DB::table('g_comment')
            ->join('g_products', 'g_comment.product_id', '=', 'g_products.id')
            ->select('g_comment.username', 'g_comment.comment', 'g_comment.created_at', 'g_products.name', 'g_products.slug')
            ->get();
        $data = array(
            'listComment' => $listComment
        );
        return view('admin.comment.list', $data);
    }
}
