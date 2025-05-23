<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;

class TelegramController extends Controller
{
    public function notify(TelegramService $telegram)
    {

        $gifUrl = 'https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExN3Y1NTFucDRuamoxOWp5NDYwbnVmNXhsdzV5aHY2bnY1cmt0c28zMSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Rl9Yqavfj2Ula/giphy.gif';
        $caption = "Deploy qilindi!";

        $telegram->sendGif($gifUrl, $caption);

        return response()->json(['message' => 'Telegramga yuborildi']);
    }
}
