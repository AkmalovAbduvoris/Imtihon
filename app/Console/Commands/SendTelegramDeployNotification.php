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
        $gifUrl = 'https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExN3Y1NTFucDRuamoxOWp5NDYwbnVmNXhsdzV5aHY2bnY1cmt0c28zMSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/Rl9Yqavfj2Ula/giphy.gif';
        $caption = "Deploy qilindi!";

        $telegram->sendGif($gifUrl, $caption);

        $this->info('Telegramga yuborildi!');
    }
}
