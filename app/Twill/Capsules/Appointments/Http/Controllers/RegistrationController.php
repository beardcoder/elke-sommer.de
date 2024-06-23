<?php

namespace App\Twill\Capsules\Appointments\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Helpers\DateHelper;
use App\Http\Controllers\Controller;
use App\Mail\Registration;
use App\Twill\Capsules\Appointments\Models\Appointment;
use App\Twill\Capsules\Appointments\Models\AppointmentRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        $appointment = Appointment::find($request->get('appointment'));

        AppointmentRegistration::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'appointment_id' => $request->get('appointment'),
        ]);

        if (TwillAppSettings::get('homepage.telegram.api_key') && TwillAppSettings::get('homepage.telegram.chat_id')) {
            $bot = new \TelegramBot\Api\BotApi(TwillAppSettings::get('homepage.telegram.api_key'));

            $bot->sendMessage(
                TwillAppSettings::get('homepage.telegram.chat_id'),
                'Neue Anmeldung von '.
                  $request->get('name').
                  ' am '.
                  DateHelper::getLocalDate($appointment->date_start)->formatLocalized('%d.%m.%Y')
            );
        }

        if (TwillAppSettings::get('homepage.email.receiver')) {
            Mail::to(TwillAppSettings::get('homepage.email.receiver'))->send(
                new Registration($request->get('name'), $request->get('email'), $appointment)
            );
        }

        return back()
          ->with('success', 'success')
          ->withFragment('#registration_form');
    }
}
