<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountController::changePassword'], [], [['text', '/compte/mot-de-passe']], [], [], []],
    'account_orders' => [[], ['_controller' => 'App\\Controller\\AccountController::showOrders'], [], [['text', '/compte/commandes']], [], [], []],
    'account_order' => [['reference'], ['_controller' => 'App\\Controller\\AccountController::showOrder'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/commandes']], [], [], []],
    'account_address' => [[], ['_controller' => 'App\\Controller\\AddressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'account_address_new' => [[], ['_controller' => 'App\\Controller\\AddressController::add'], [], [['text', '/compte/adresses/ajouter']], [], [], []],
    'account_address_update' => [['id'], ['_controller' => 'App\\Controller\\AddressController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/adresses/modifier']], [], [], []],
    'account_address_delete' => [['id'], ['_controller' => 'App\\Controller\\AddressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/adresses/supprimer']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/ajouter']], [], [], []],
    'decrease_item' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/réduire']], [], [], []],
    'remove_cart_item' => [['id'], ['_controller' => 'App\\Controller\\CartController::removeItem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/supprimer']], [], [], []],
    'remove_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/panier/supprimer/']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/a-propos']], [], [], []],
    'mailer' => [[], ['_controller' => 'App\\Controller\\MailerController::index'], [], [['text', '/mailer']], [], [], []],
    'order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'order_add' => [[], ['_controller' => 'App\\Controller\\OrderController::summary'], [], [['text', '/commande/recap']], [], [], []],
    'checkout' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::payment'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/checkout']], [], [], []],
    'payment_success' => [['order_id'], ['_controller' => 'App\\Controller\\PaymentController::paymentSuccess'], [], [['variable', '/', '[^/]++', 'order_id', true], ['text', '/commande/valide']], [], [], []],
    'product' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/articles']], [], [], []],
    'product_show' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/articles']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
