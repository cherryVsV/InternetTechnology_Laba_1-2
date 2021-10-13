<?php

namespace App\Http\Controllers\Pages\ContactPage;

use App\Http\Controllers\Controller;
use App\Models\CallRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class ContactController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.contact', compact('profile'));
    }
    public function addPhoneRequest(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|string',
            'name' => 'required|string',
        ]);
        $call = CallRequest::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'time'=>$request->time
        ]);
        $this->sendNotificationToTelegram($call);
    }
    public function sendNotificationToTelegram($data){
        $text = "Новая заявка на звонок!\n"
            . "<b>Имя: </b>\n"
            . "$data->name\n"
            . "<b>Номер телефона: </b>\n"
            . "$data->phone\n"
            . "<b>Время для звонка: </b>\n"
            . "$data->time\n";

        Telegram::sendMessage([
            'chat_id' => '-1001192339119',
            'parse_mode' => 'HTML',
            'text' => $text,
        ]);

    }
}
