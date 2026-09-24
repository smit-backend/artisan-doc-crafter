<?php

return [
    'enabled' => env('ARTISAN_DOC_CRAFTER_ENABLED', true),
    'timeout' => env('ARTISAN_DOC_CRAFTER_TIMEOUT', 30),
    'log_channel' => env('ARTISAN_DOC_CRAFTER_LOG', 'stack'),
];
