<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TelegramBot\Api\BotApi;

class MailController extends Controller
{
    public function contact(Request $request)
    {
        if (TwillAppSettings::get('homepage.telegram.api_key') && TwillAppSettings::get('homepage.telegram.chat_id')) {
            $botApi = new BotApi(TwillAppSettings::get('homepage.telegram.api_key'));

            $botApi->sendMessage(
                TwillAppSettings::get('homepage.telegram.chat_id'),
                'Neue Nachricht von '.$request->get('name')."\nEmail: ".$request->get('email')."\n".$request->get('message')
            );
        }

        if (TwillAppSettings::get('homepage.email.receiver')) {
            Mail::to(TwillAppSettings::get('homepage.email.receiver'))->send(
                new Contact($request->get('name'), $request->get('email'), $request->get('message'))
            );
        }

        return back()->with('success', TwillAppSettings::get('homepage.email.success'));
    }
}
