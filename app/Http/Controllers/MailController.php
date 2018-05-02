<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class MailController extends Controller
{
    public $message;

    public static function send($type = 'checkout')
    {
        try {
            if ($type == 'checkout') {
                Mail::send('mail.checkout', [], function($message) {
                    $message->to('nguyenvandoan01@admicro.vn', 'Phu')->subject('Thông báo!');
                });
            }
            if ($type == 'comment') {
                Mail::send('mail.comment', [], function($message) {
                    $message->to('nguyenvandoan01@admicro.vn', 'Phu')->subject('Thông báo!');
                });
            }
        } catch (Exception $e) {
            return view(route('landing'));
        }
        return true;
    }

}
