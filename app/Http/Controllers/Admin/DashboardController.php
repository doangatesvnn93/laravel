<?php
/**
 * Created by PhpStorm.
 * User: doang
 * Date: 3/24/2018
 * Time: 10:30 AM
 */
namespace App\Http\Controllers\Admin;
use App\Bill;
use App\Subscribe;

class DashboardController extends \App\Http\Controllers\InitController
{
    public function overview()
    {
        $billData = Bill::where('status', 0)->orderBy('id', 'desc')->get();
        $data = array(
            'billData' => $billData
        );
        return view('admin.index', $data);
    }

    public function subscribe()
    {
        $data = Subscribe::paginate(10);
        return view('admin.subscribe.index', array('data' => $data));
    }

}