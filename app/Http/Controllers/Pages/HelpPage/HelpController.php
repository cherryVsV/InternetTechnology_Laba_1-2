<?php

namespace App\Http\Controllers\Pages\HelpPage;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class HelpController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.help', compact('profile'));
    }
    public function getNewQuestion(Request $request)
    {
        $this->validate($request, [
            'question' => 'required|string',
            'phone' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
        ]);
        $question = Question::create([
            'question'=>$request->question,
            'phone'=>$request->phone,
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        if($request->file!=''){
            $question->file=$request->file;
            $question->save();
        }
        if($request->order!=null){
            if(Order::where('id', $request->order)->exists()){
                $question->order_id = $request->order;
                $question->save();
            }
        }
        $this->sendNotificationToTelegram($question);

    }
    public function storeFile(Request $request){
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('img/questions'), $fileName);

        return response()->json(['file' => $fileName]);
    }
    public function sendNotificationToTelegram($data){
        $text = "Новый вопрос с сайта MediaShop24!\n"
            . "<b>Имя: </b>\n"
            . "$data->name\n"
            . "<b>Номер телефона: </b>\n"
            . "$data->phone\n"
            . "<b>Электронная почта: </b>\n"
            . "$data->email\n"
            . "<b>Сообщение: </b>\n"
            . "$data->question\n";
        if($data->order_id!=null){
            $text .= "<b>Номер заказа: </b>\n"
            . "$data->order_id\n";
        }

        Telegram::sendMessage([
            'chat_id' => '-1001192339119',
            'parse_mode' => 'HTML',
            'text' => $text,
        ]);
        if($data->file!=null){
            Telegram::sendDocument([
                'chat_id' => '-1001192339119',
                'document' => InputFile::create($data->file)]);
        }

    }
}
