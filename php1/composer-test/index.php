<?php

require __DIR__ . '/vendor/autoload.php';

use EffectingValidator\Validator\FormValidator;

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
    require $file;
    }
    });
