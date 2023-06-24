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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/sponsor' => [[['_route' => 'app_api_sponsor', '_controller' => 'App\\Controller\\ApiController::createSponsor'], null, ['POST' => 0], null, false, false, null]],
        '/api/student' => [[['_route' => 'app_api_student', '_controller' => 'App\\Controller\\ApiController::createStudent'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/users' => [[['_route' => 'app_dashboard_users', '_controller' => 'App\\Controller\\DashboardController::users'], null, ['GET' => 0], null, false, false, null]],
        '/sponsorships' => [[['_route' => 'app_dashboard_sponsorships', '_controller' => 'App\\Controller\\DashboardController::sponsorships'], null, ['GET' => 0], null, false, false, null]],
        '/matches' => [[['_route' => 'app_dashboard_matches', '_controller' => 'App\\Controller\\DashboardController::matches'], null, ['GET' => 0], null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsorship' => [[['_route' => 'app_sponsorship_index', '_controller' => 'App\\Controller\\SponsorshipController::index'], null, ['GET' => 0], null, true, false, null]],
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/user/([^/]++)(*:183)'
                .'|/s(?'
                    .'|ponsor(?'
                        .'|ship/(?'
                            .'|([^/]++)(*:221)'
                            .'|new(*:232)'
                            .'|([^/]++)(?'
                                .'|(*:251)'
                                .'|/edit(*:264)'
                                .'|(*:272)'
                            .')'
                        .')'
                        .'|/([^/]++)(*:291)'
                    .')'
                    .'|tudent/([^/]++)(*:315)'
                .')'
                .'|/match/([^/]++)(*:339)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'app_dashboard_user', '_controller' => 'App\\Controller\\DashboardController::user'], ['id'], ['GET' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_dashboard_sponsorship', '_controller' => 'App\\Controller\\DashboardController::sponsorship'], ['id'], ['GET' => 0], null, false, true, null]],
        232 => [[['_route' => 'app_sponsorship_new', '_controller' => 'App\\Controller\\SponsorshipController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'app_sponsorship_show', '_controller' => 'App\\Controller\\SponsorshipController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_sponsorship_edit', '_controller' => 'App\\Controller\\SponsorshipController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'app_sponsorship_delete', '_controller' => 'App\\Controller\\SponsorshipController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        339 => [
            [['_route' => 'app_dashboard_match', '_controller' => 'App\\Controller\\DashboardController::match'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
