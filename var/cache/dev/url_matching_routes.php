<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reservation' => [[['_route' => 'app_admin_reservation_index', '_controller' => 'App\\Controller\\AdminReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_admin_reservation_new', '_controller' => 'App\\Controller\\AdminReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/carte/restaurant' => [[['_route' => 'app_carte_restaurant', '_controller' => 'App\\Controller\\CarteRestaurantController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande/a/emporter' => [[['_route' => 'app_commande_a_emporter_index', '_controller' => 'App\\Controller\\CommandeAEmporterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/a/emporter/new' => [[['_route' => 'app_commande_a_emporter_new', '_controller' => 'App\\Controller\\CommandeAEmporterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formule' => [[['_route' => 'app_formule_index', '_controller' => 'App\\Controller\\FormuleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formule/new' => [[['_route' => 'app_formule_new', '_controller' => 'App\\Controller\\FormuleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\HomeController::profil'], null, ['GET' => 0], null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'app_mentions_legales', '_controller' => 'App\\Controller\\MentionsLegalesController::index'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/platjour' => [[['_route' => 'app_plat_jour_index', '_controller' => 'App\\Controller\\PlatJourController::index'], null, ['GET' => 0], null, true, false, null]],
        '/platjour/new' => [[['_route' => 'app_plat_jour_new', '_controller' => 'App\\Controller\\PlatJourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reservation/([^/]++)(?'
                    .'|(*:31)'
                    .'|/edit(*:43)'
                    .'|(*:50)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:82)'
                        .'|/edit(*:94)'
                        .'|(*:101)'
                    .')'
                    .'|ommande/a/emporter/(?'
                        .'|([^/]++)(*:140)'
                        .'|aemporter(*:157)'
                        .'|([^/]++)(?'
                            .'|/edit(*:181)'
                            .'|(*:189)'
                        .')'
                    .')'
                .')'
                .'|/formule/([^/]++)(?'
                    .'|(*:220)'
                    .'|/edit(*:233)'
                    .'|(*:241)'
                .')'
                .'|/plat(?'
                    .'|/([^/]++)(?'
                        .'|(*:270)'
                        .'|/edit(*:283)'
                        .'|(*:291)'
                    .')'
                    .'|jour/([^/]++)(?'
                        .'|(*:316)'
                        .'|/edit(*:329)'
                        .'|(*:337)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:364)'
                    .'|/edit(*:377)'
                    .'|(*:385)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:425)'
                    .'|wdt/([^/]++)(*:445)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:491)'
                            .'|router(*:505)'
                            .'|exception(?'
                                .'|(*:525)'
                                .'|\\.css(*:538)'
                            .')'
                        .')'
                        .'|(*:548)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_admin_reservation_show', '_controller' => 'App\\Controller\\AdminReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_admin_reservation_edit', '_controller' => 'App\\Controller\\AdminReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_admin_reservation_delete', '_controller' => 'App\\Controller\\AdminReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_commande_a_emporter_show', '_controller' => 'App\\Controller\\CommandeAEmporterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        157 => [[['_route' => 'app_inscrit_index', '_controller' => 'App\\Controller\\CommandeAEmporterController::emporter'], [], null, null, false, false, null]],
        181 => [[['_route' => 'app_commande_a_emporter_edit', '_controller' => 'App\\Controller\\CommandeAEmporterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'app_commande_a_emporter_delete', '_controller' => 'App\\Controller\\CommandeAEmporterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_formule_show', '_controller' => 'App\\Controller\\FormuleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'app_formule_edit', '_controller' => 'App\\Controller\\FormuleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_formule_delete', '_controller' => 'App\\Controller\\FormuleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_plat_jour_show', '_controller' => 'App\\Controller\\PlatJourController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_plat_jour_edit', '_controller' => 'App\\Controller\\PlatJourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'app_plat_jour_delete', '_controller' => 'App\\Controller\\PlatJourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        385 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        425 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        445 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        491 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        505 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        525 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        538 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        548 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
