<?php

namespace App\Telegram\MainClass;


use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
class MainClass
{
    public function __invoke(Nutgram $bot):void
    {
        $kb = ['reply_markup'=>[
            'keyboard' => [
                [
                    ['text' =>'🍴 Меню'],
                ],
                [
                    ['text' => '🛍️ Мои заказы'],
                ],
                [
                    ['text' => '✍️ Оставить отзыв'],
                    ['text' => '🔧 Настройки']
                ],
            ], 'resize_keyboard' => true
        ]];
        $bot->sendMessage('Выберите следущее', $kb);
    }
}
