<?php

namespace App\Telegram\MenuClass;


use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
class MenuClass
{
    public function __invoke(Nutgram $bot):void
    {
        $kb = ['reply_markup'=>[
            'keyboard' => [
                [
                    ['text' => 'Лаваш'],
                    ['text' => 'Бургеры']
                ],
                [
                    ['text' => '⬅️ Назад'],
                ],
            ], 'resize_keyboard' => true
        ]];
        $bot->sendMessage('Выберите категорию', $kb);
    }
}


//[
//    ['text' =>'📍 Отправить геолокацию', 'request_location' => true],
//],
//                [
//                    ['text' => '⬅️ Назад'],
//                ],
