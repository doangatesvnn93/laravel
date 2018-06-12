<?php

namespace App\Http\Controllers;

use App\WebsiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class MailController extends Controller
{
    public static function send($type = 'checkout')
    {
        $websiteConfig = WebsiteConfig::where('id', 1)->first();
        $websiteConfig = isset($websiteConfig->content) ? json_decode($websiteConfig->content) : array();
        $toMail = isset($websiteConfig->email) ? $websiteConfig->email : 'doangatesvnn93@gmail.com';
        try {
            switch ($type) {
                case 'checkout':
                    $template = 'mail.checkout';
                    break;
                case 'comment':
                    $template = 'mail.comment';
                    break;
                case 'subscribe':
                    $template = 'mail.subscribe';
                    break;
            }

            Mail::send($template, [], function ($message) use ($toMail) {
                $message->to($toMail, 'TL')->cc('nguyenvandoan01@admicro.vn')->subject('Thông báo!');
            });
        } catch (Exception $e) {
            return view(route('landing'));
        }
        return true;
    }
}
