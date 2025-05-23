<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected string $token;
    protected string $chatId;

    public function __construct()
    {
        $this->token = config('services.telegram.token');
        $this->chatId = config('services.telegram.chat_id');
    }

    public function sendGif(string $gifUrl, ?string $caption = null): bool
    {
        $url = "https://api.telegram.org/bot{$this->token}/sendAnimation";

        $response = Http::post($url, [
            'chat_id' => $this->chatId,
            'animation' => $gifUrl,
            'caption' => $caption,
            'parse_mode' => 'Markdown',
        ]);

        return $response->successful();
    }
}
