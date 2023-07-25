<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request)
    {
        if (
            TwillAppSettings::get('homepage.telegram.api_key')
            && TwillAppSettings::get('homepage.telegram.chat_id')
        ) {
            $bot = new \TelegramBot\Api\BotApi(
                TwillAppSettings::get('homepage.telegram.api_key')
            );

            $bot->sendMessage(
                TwillAppSettings::get('homepage.telegram.chat_id'),
                'Neue Nachricht von '.$request->get('name')
            );
        }
        if (TwillAppSettings::get('homepage.email.receiver')) {
            Mail::to(TwillAppSettings::get('homepage.email.receiver'))->send(
                new Contact(
                    $request->get('name'),
                    $request->get('email'),
                    $request->get('message')
                )
            );
        }

        return back()->with(
            'success',
            TwillAppSettings::get('homepage.email.success')
        );
    }
}
