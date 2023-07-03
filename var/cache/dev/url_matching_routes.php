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
        '/api/algoTest' => [[['_route' => 'app_algotest', '_controller' => 'App\\Controller\\ApiController::algotest'], null, ['GET' => 0], null, false, false, null]],
        '/api/sponsor' => [[['_route' => 'app_api_sponsor', '_controller' => 'App\\Controller\\ApiController::createSponsor'], null, ['POST' => 0], null, false, false, null]],
        '/api/student' => [[['_route' => 'app_api_student', '_controller' => 'App\\Controller\\ApiController::createStudent'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboard/users' => [[['_route' => 'app_dashboard_users', '_controller' => 'App\\Controller\\DashboardController::users'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/sponsors' => [[['_route' => 'app_dashboard_sponsors', '_controller' => 'App\\Controller\\DashboardController::sponsors'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/students' => [[['_route' => 'app_dashboard_students', '_controller' => 'App\\Controller\\DashboardController::students'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/log' => [[['_route' => 'app_dashboard_log', '_controller' => 'App\\Controller\\DashboardController::log'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/sponsorships' => [[['_route' => 'app_dashboard_sponsorships', '_controller' => 'App\\Controller\\DashboardController::sponsorships'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/matches' => [[['_route' => 'app_dashboard_matches', '_controller' => 'App\\Controller\\DashboardController::matches'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/admin' => [[['_route' => 'app_dashboard_admin', '_controller' => 'App\\Controller\\DashboardController::admin'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/admin/create' => [[['_route' => 'app_dashboard_admin_create', '_controller' => 'App\\Controller\\DashboardController::createAdmin'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/profil' => [[['_route' => 'app_dashboard_profile', '_controller' => 'App\\Controller\\DashboardController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/error403' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::show403'], null, ['GET' => 0], null, false, false, null]],
        '/generate' => [[['_route' => 'app_perma_link_generate', '_controller' => 'App\\Controller\\PermaLinkController::urlGenerate'], null, null, null, false, false, null]],
        '/confirm' => [[['_route' => 'app_permalink_confirmation', '_controller' => 'App\\Controller\\PermaLinkController::confirmation'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/dashboard/(?'
                    .'|user/([^/]++)(?'
                        .'|(*:199)'
                        .'|/sponsorship(*:219)'
                    .')'
                    .'|validate/([^/]++)(*:245)'
                    .'|match/([^/]++)(*:267)'
                    .'|admin/delete/([^/]++)(*:296)'
                .')'
                .'|/info/([^/]++)(*:319)'
                .'|/yes/([^/]++)/([^/]++)(*:349)'
                .'|/end/([^/]++)/([^/]++)(*:379)'
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
        199 => [[['_route' => 'app_dashboard_user', '_controller' => 'App\\Controller\\DashboardController::user'], ['id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_dashboard_sponsorship_validation', '_controller' => 'App\\Controller\\DashboardController::sponsorship'], ['id'], ['GET' => 0], null, false, false, null]],
        245 => [[['_route' => 'app_sponsorship_validate', '_controller' => 'App\\Controller\\DashboardController::sponsorshipvalidation'], ['sponsorship'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_dashboard_match', '_controller' => 'App\\Controller\\DashboardController::match'], ['id'], ['GET' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_dashboard_admin_delete', '_controller' => 'App\\Controller\\DashboardController::deleteAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        319 => [[['_route' => 'app_perma_link', '_controller' => 'App\\Controller\\PermaLinkController::accountinfo'], ['tkn'], null, null, false, true, null]],
        349 => [[['_route' => 'app_permalink_emailredirect', '_controller' => 'App\\Controller\\PermaLinkController::emailRedirect'], ['id', 'sp_id'], null, null, false, true, null]],
        379 => [
            [['_route' => 'app_permalink_emailredirect_end', '_controller' => 'App\\Controller\\PermaLinkController::emailRedirectEnd'], ['id', 'sp_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
