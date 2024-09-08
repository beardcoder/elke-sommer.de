<?php

namespace App\Twill\Capsules\Appointments\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Http\Controllers\Controller;
use App\Mail\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        if (TwillAppSettings::get('homepage.telegram.api_key') && TwillAppSettings::get('homepage.telegram.chat_id')) {
            $botApi = new \TelegramBot\Api\BotApi(TwillAppSettings::get('homepage.telegram.api_key'));

            $botApi->sendMessage(
                TwillAppSettings::get('homepage.telegram.chat_id'),
                'Neue Anmeldung von '.$request->get('name')
            );
        }

        if (TwillAppSettings::get('homepage.email.receiver')) {
            Mail::to(TwillAppSettings::get('homepage.email.receiver'))->send(
                new Registration($request->get('name'), $request->get('email'))
            );
        }

        return back()->with('success', 'success')->withFragment('#registration_form');
    }
}
