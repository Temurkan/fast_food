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
                        InlineKeyboardButton::make('23000 сум', callback_data: '23000 сум'),
                        InlineKeyboardButton::make('26000 сум', callback_data: '26000 сум')
                    )
            ]
        );

        $bot->onCallbackQueryData('23000 сум', function(Nutgram $bot) use ($photo) {
            $bot->sendPhoto($photo,
            [
                'reply_markup' => InlineKeyboardMarkup::make()
                    ->addRow(
                        InlineKeyboardButton::make('+', callback_data: 'type:d'),
                        InlineKeyboardButton::make('1', callback_data: 'type:f'),
                        InlineKeyboardButton::make('-', callback_data: 'type:c')
                    )
                    ->addRow(
                        InlineKeyboardButton::make('🛒 Корзина', callback_data: 'type:v')
                    )
            ]
            );
        });
        $bot->onCallbackQueryData('26000 сум', function(Nutgram $bot){
            $bot->answerCallbackQuery([
                'reply_markup' => InlineKeyboardMarkup::make()
                    ->addRow(
                        InlineKeyboardButton::make('+', callback_data: 'type:d'),
                        InlineKeyboardButton::make('1', callback_data: 'type:f'),
                        InlineKeyboardButton::make('-', callback_data: 'type:c')
                    )
                    ->addRow(
                        InlineKeyboardButton::make('🛒 Корзина', callback_data: 'type:v')
                    )
            ]);
        });
        $bot->sendMessage('Выберите следущее', $kb);
    }
}
