<?php

namespace App\Telegram\LavashBeefClass;

use Psr\SimpleCache\InvalidArgumentException;
use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class LavashBeefClass
{

    public function __invoke(Nutgram $bot):void
    {
        $kb = ['reply_markup'=>[
            'keyboard' => [
                [
                    ['text' => '🛒 Корзина'],
                    ['text' => '⬅️ Назад'],
                ],
            ], 'resize_keyboard' => true
        ]];
        $photo = fopen('public/beefLavash.jpg', 'r+');
        $bot->onCallbackQueryData('23000 сум', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => '23000 сум'
            ]);
        });
        $bot->onCallbackQueryData('26000 сум', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => '26000 сум'
            ]);
        });
    }
}
