<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\BaseController::getHome'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/bibliotheque' => [[['_route' => 'bibliotheque', '_controller' => 'App\\Controller\\BibliothequeController::getBibliotheque'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\ConnexionController::getConnexion'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::getRegister'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/upload' => [[['_route' => 'upload', '_controller' => 'App\\Controller\\UploadController::getUpload'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/apropos/([^/]++)(*:59)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [
            [['_route' => 'about', '_controller' => 'App\\Controller\\BaseController::getAPropos'], ['subject'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
