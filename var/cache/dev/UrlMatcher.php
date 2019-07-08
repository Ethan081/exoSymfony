<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => ' hello_index', '_controller' => 'App\\Controller\\HomeController::helloWorld'], null, null, null, false, false, null]],
        '/firstName' => [[['_route' => 'firstName_index', '_controller' => 'App\\Controller\\HomeController::first_name'], null, null, null, false, false, null]],
        '/majeur' => [[['_route' => 'your_age_index', '_controller' => 'App\\Controller\\HomeController::majeur'], null, null, null, false, false, null]],
        '/adress' => [[['_route' => 'adress', '_controller' => 'App\\Controller\\HomeController::adress'], null, null, null, false, false, null]],
        '/twig' => [[['_route' => 'twig', '_controller' => 'App\\Controller\\HomeController::twigBasic'], null, null, null, false, false, null]],
        '/homePage' => [[['_route' => 'homePage', '_controller' => 'App\\Controller\\HomeController::homePage'], null, null, null, false, false, null]],
        '/showArticle' => [[['_route' => 'showArticle', '_controller' => 'App\\Controller\\HomeController::showArticle'], null, null, null, false, false, null]],
        '/exo01' => [[['_route' => 'exo01', '_controller' => 'App\\Controller\\HomeController::exo01'], null, null, null, false, false, null]],
        '/exo02' => [[['_route' => 'exo02', '_controller' => 'App\\Controller\\HomeController::exo02'], null, null, null, false, false, null]],
        '/exo03' => [[['_route' => 'exo03', '_controller' => 'App\\Controller\\HomeController::exo03'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/list/([^/]++)(*:183)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [
            [['_route' => 'numero_de_page', '_controller' => 'App\\Controller\\HomeController::list'], ['page'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
