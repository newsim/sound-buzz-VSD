<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\BaseController::getHome'], [], [['text', '/']], [], []],
    'about' => [['subject'], ['_controller' => 'App\\Controller\\BaseController::getAPropos'], [], [['variable', '/', '[^/]++', 'subject', true], ['text', '/apropos']], [], []],
];
