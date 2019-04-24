<?php

declare(strict_types=1);

return [
    'plugins' => [
        'recaptcha' => [
            'public' => env('RECAPTCHA_PUBLIC'),
            'secret' => env('RECAPTCHA_SECRET'),
        ]
    ]
];
