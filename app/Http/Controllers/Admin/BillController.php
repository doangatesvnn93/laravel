<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends \App\Http\Controllers\InitController
{
    public function update(Request $request)
    {
        $id = $request->id;
        $status = request('status', 0);
        $response = array('status' => 'RESULT_OK', 'message' => 'Update successfully');
        Bill::where('id', $id)->update(array(
            'status' => $status
        ));
        $this->setFlashData('success', 'Update Successfuly');
        return response($response);
    }
}
