<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;

class TelegramController extends Controller
{
    public function notify(TelegramService $telegram)
    {

        $text = "Deploy qilindi!";

        $telegram->sendMessage($text);

        return response()->json(['message' => 'Telegramga yuborildi']);
    }
}
