<?php

namespace App\Telegram\LavashChickenClass;


use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
class LavashChickenClass
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
        $photo = fopen('public/chickenLavash.jpg', 'r+');
        $bot->sendPhoto($photo,
            [
                'reply_markup' => InlineKeyboardMarkup::make()
                    ->addRow(
                        InlineKeyboardButton::make('23000 сум', callback_data: 'type:a'),
                        InlineKeyboardButton::make('26000 сум', callback_data: 'type:b')
                    )
            ]
        );
        $bot->onCallbackQueryData('type:a|type:b', function(Nutgram $bot) use ($photo) {
            $bot->sendPhoto($photo,
                [
                    'reply_markup' => InlineKeyboardMarkup::make()
                        ->addRow(
                            InlineKeyboardButton::make('+', callback_data: 'type:d'),
                            InlineKeyboardButton::make('1', callback_data: 'type:f'),
                            InlineKeyboardButton::make('-', callback_data: 'type:c')
                        )
                ]
            );
            $bot->answerCallbackQuery();
        });
        $bot->onCallbackQueryData('type:d', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => '20000 сум'
            ]);
        });
        $bot->onCallbackQueryData('type:f', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => '22000 сум'
            ]);
        });
        $bot->onCallbackQueryData('type:c', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'text' => '23000 сум'
            ]);
        });
        $bot->sendMessage('Выберите следущее', $kb);
    }
}

//[
//    'reply_markup' => InlineKeyboardMarkup::make()
//        ->addRow(
//            InlineKeyboardButton::make('+', callback_data: 'type:d'),
//            InlineKeyboardButton::make('1', callback_data: 'type:f'),
//            InlineKeyboardButton::make('-', callback_data: 'type:c')
//        )
//        ->addRow(
//            InlineKeyboardButton::make('🛒 Корзина', callback_data: 'type:v')
//        )
//];
