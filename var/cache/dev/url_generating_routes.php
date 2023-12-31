<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_algotest' => [[], ['_controller' => 'App\\Controller\\ApiController::algotest'], [], [['text', '/api/algoTest']], [], [], []],
    'app_api_sponsor' => [[], ['_controller' => 'App\\Controller\\ApiController::createSponsor'], [], [['text', '/api/sponsor']], [], [], []],
    'app_api_student' => [[], ['_controller' => 'App\\Controller\\ApiController::createStudent'], [], [['text', '/api/student']], [], [], []],
    'app_dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard/']], [], [], []],
    'app_dashboard_users' => [[], ['_controller' => 'App\\Controller\\DashboardController::users'], [], [['text', '/dashboard/users']], [], [], []],
    'app_dashboard_sponsors' => [[], ['_controller' => 'App\\Controller\\DashboardController::sponsors'], [], [['text', '/dashboard/sponsors']], [], [], []],
    'app_dashboard_students' => [[], ['_controller' => 'App\\Controller\\DashboardController::students'], [], [['text', '/dashboard/students']], [], [], []],
    'app_dashboard_user' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::user'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/user']], [], [], []],
    'app_dashboard_log' => [[], ['_controller' => 'App\\Controller\\DashboardController::log'], [], [['text', '/dashboard/log']], [], [], []],
    'app_dashboard_sponsorships' => [[], ['_controller' => 'App\\Controller\\DashboardController::sponsorships'], [], [['text', '/dashboard/sponsorships']], [], [], []],
    'app_dashboard_sponsorship_validation' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::sponsorship'], [], [['text', '/sponsorship'], ['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/user']], [], [], []],
    'app_sponsorship_validate' => [['sponsorship'], ['_controller' => 'App\\Controller\\DashboardController::sponsorshipvalidation'], [], [['variable', '/', '[^/]++', 'sponsorship', true], ['text', '/dashboard/validate']], [], [], []],
    'app_dashboard_matches' => [[], ['_controller' => 'App\\Controller\\DashboardController::matches'], [], [['text', '/dashboard/matches']], [], [], []],
    'app_dashboard_match' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::match'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/match']], [], [], []],
    'app_dashboard_admin' => [[], ['_controller' => 'App\\Controller\\DashboardController::admin'], [], [['text', '/dashboard/admin']], [], [], []],
    'app_dashboard_admin_create' => [[], ['_controller' => 'App\\Controller\\DashboardController::createAdmin'], [], [['text', '/dashboard/admin/create']], [], [], []],
    'app_dashboard_admin_delete' => [['id'], ['_controller' => 'App\\Controller\\DashboardController::deleteAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/dashboard/admin/delete']], [], [], []],
    'app_dashboard_profile' => [[], ['_controller' => 'App\\Controller\\DashboardController::profile'], [], [['text', '/dashboard/profil']], [], [], []],
    'app_error' => [[], ['_controller' => 'App\\Controller\\ErrorController::show403'], [], [['text', '/error403']], [], [], []],
    'app_perma_link_generate' => [[], ['_controller' => 'App\\Controller\\PermaLinkController::urlGenerate'], [], [['text', '/generate']], [], [], []],
    'app_perma_link' => [['tkn'], ['_controller' => 'App\\Controller\\PermaLinkController::accountinfo'], [], [['variable', '/', '[^/]++', 'tkn', true], ['text', '/info']], [], [], []],
    'app_permalink_emailredirect' => [['id', 'sp_id'], ['_controller' => 'App\\Controller\\PermaLinkController::emailRedirect'], [], [['variable', '/', '[^/]++', 'sp_id', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/yes']], [], [], []],
    'app_permalink_emailredirect_end' => [['id', 'sp_id'], ['_controller' => 'App\\Controller\\PermaLinkController::emailRedirectEnd'], [], [['variable', '/', '[^/]++', 'sp_id', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/end']], [], [], []],
    'app_permalink_confirmation' => [[], ['_controller' => 'App\\Controller\\PermaLinkController::confirmation'], [], [['text', '/confirm']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
