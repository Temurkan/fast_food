<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use App\Telegram\LavashBeefClass\LavashBeefClass;
use App\Telegram\LavashChickenClass\LavashChickenClass;
use App\Telegram\LavashClass\LavashClass;
use App\Telegram\MainClass\MainClass;
use App\Telegram\MenuClass\MenuClass;
use App\Telegram\PriceClass;
use SergiX44\Nutgram\Nutgram;


/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/


$bot->onCommand('start', MainClass::class );

$bot->onText('🍴 Меню', MenuClass::class );
$bot->onText('Лаваш', LavashClass::class );
$bot->onText('Лаваш с говядиной', LavashBeefClass::class );
$bot->onText('Лаваш с курицей', LavashChickenClass::class );
//$bot->onText('📍 Отправить геолокацию', SendLocationClass::class );
//$bot->onText('✍️ Оставить', MenuClass::class );
//$bot->onText('🔧 Настройки', MenuClass::class );
