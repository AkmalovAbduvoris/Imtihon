<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\TelegramService;

class SendTelegramDeployNotification extends Command
{
    protected $signature = 'telegram:notify';

    protected $description = 'Send deploy message to Telegram';

    public function handle(TelegramService $telegram)
    {
        $text = "Deploy qilindi!";

        $telegram->sendMessage($text);

        $this->info('Telegramga yuborildi!');
    }
}
