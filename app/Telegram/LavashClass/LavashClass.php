<?php

namespace App\Telegram\LavashClass;


use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
class LavashClass
{
    public function __invoke(Nutgram $bot):void
    {
        $kb = ['reply_markup'=>[
            'keyboard' => [
                [
                    ['text' => 'Лаваш с говядиной'],
                    ['text' => 'Лаваш с курицей']
                ],
                [
                    ['text' => '⬅️ Назад'],
                ],
            ], 'resize_keyboard' => true
        ]];
    $photo = fopen('public/lavash.jpg', 'r+'); // open the file

    /** @var Message $message */
    $message = $bot->sendPhoto($photo, ['chat_id' => 814336975]); // pass the resource

    if (is_resource($photo)) {
        fclose($photo);
    }
        $bot->sendMessage('Выберите следущее', $kb);
    }
}
