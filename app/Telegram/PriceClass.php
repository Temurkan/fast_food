<?php

namespace App\Telegram;


use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class PriceClass
{

    public function __invoke(Nutgram $bot):void {
                     (
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
    }
}
