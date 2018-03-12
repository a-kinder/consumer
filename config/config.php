<?php

use function DI\env;
use function DI\get;

return [
    'appName' => 'HashPipe',
    'displayErrorDetails' => true,
    'hp.environment' => env('HP_ENVIRONMENT', 'local'),
    'developmentMode' => env('DEVELOPMENT_MODE', true)
];
