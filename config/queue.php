<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Queue Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور queue — همهٔ کلیدهای مستندشده در `docs/03-engines/queue.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/queue.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('QUEUE_DEFAULT', 'sync'),

    /*| لیست درایورها */
    'drivers' => [
        'sync' => [
            // پیکربندی درایور sync
            'enabled' => true,
        ],
        'database' => [
            // پیکربندی درایور database
            'enabled' => true,
        ],
        'redis' => [
            // پیکربندی درایور redis
            'enabled' => true,
        ],
        'file' => [
            // پیکربندی درایور file
            'enabled' => true,
        ],
        'null' => [
            // پیکربندی درایور null
            'enabled' => true,
        ],
    ],

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('QUEUE_PREFIX', 'queue:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('QUEUE_LOG_CHANNEL', 'queue'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Queue',
        'accessor' => 'queue',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];