<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte' => [[['_route' => 'compte_index', '_controller' => 'App\\Controller\\CompteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/compte/new' => [[['_route' => 'compte_new', '_controller' => 'App\\Controller\\CompteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prestataires' => [[['_route' => 'prestataires_index', '_controller' => 'App\\Controller\\PrestatairesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prestataires/new' => [[['_route' => 'prestataires_new', '_controller' => 'App\\Controller\\PrestatairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/system_user' => [[['_route' => 'system_user_index', '_controller' => 'App\\Controller\\SystemUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/system_user/new' => [[['_route' => 'system_user_new', '_controller' => 'App\\Controller\\SystemUserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transactions' => [[['_route' => 'transactions_index', '_controller' => 'App\\Controller\\TransactionsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/transactions/new' => [[['_route' => 'transactions_new', '_controller' => 'App\\Controller\\TransactionsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/compte/([^/]++)(*:23)'
                .'|/prestataires/([^/]++)(?'
                    .'|(*:55)'
                    .'|/(?'
                        .'|edit(*:70)'
                        .'|block(*:82)'
                        .'|dblock(*:95)'
                    .')'
                    .'|(*:103)'
                .')'
                .'|/system_user/(?'
                    .'|([^/]++)(?'
                        .'|(*:139)'
                        .'|/(?'
                            .'|edit(*:155)'
                            .'|block(*:168)'
                            .'|deblock(*:183)'
                        .')'
                    .')'
                    .'|login(?'
                        .'|(*:201)'
                        .'|_check(*:215)'
                    .')'
                .')'
                .'|/transactions/([^/]++)(?'
                    .'|(*:250)'
                    .'|/arhiver(*:266)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:292)'
                    .'|/(?'
                        .'|edit(*:308)'
                        .'|block(*:321)'
                        .'|dblock(*:335)'
                    .')'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:380)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:411)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:450)'
                            .'|mptes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:484)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:522)'
                                .')'
                            .')'
                        .')'
                        .'|prestataires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:566)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:604)'
                            .')'
                        .')'
                        .'|transactions(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:647)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:685)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'compte_show', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        55 => [[['_route' => 'prestataires_show', '_controller' => 'App\\Controller\\PrestatairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        70 => [[['_route' => 'prestataires_edit', '_controller' => 'App\\Controller\\PrestatairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'prestataires_blk', '_controller' => 'App\\Controller\\PrestatairesController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'prestataires_deb', '_controller' => 'App\\Controller\\PrestatairesController::dblock'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        103 => [[['_route' => 'prestataires_delete', '_controller' => 'App\\Controller\\PrestatairesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        139 => [[['_route' => 'system_user_show', '_controller' => 'App\\Controller\\SystemUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'system_user_edit', '_controller' => 'App\\Controller\\SystemUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        168 => [[['_route' => 'system_user_block', '_controller' => 'App\\Controller\\SystemUserController::block'], ['id'], ['POST' => 0], null, false, false, null]],
        183 => [[['_route' => 'system_user_deblock', '_controller' => 'App\\Controller\\SystemUserController::deblock'], ['id'], ['POST' => 0], null, false, false, null]],
        201 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SystemUserController::login'], [], ['POST' => 0], null, false, false, null]],
        215 => [[['_route' => 'system_login_check'], [], null, null, false, false, null]],
        250 => [[['_route' => 'transactions_show', '_controller' => 'App\\Controller\\TransactionsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'transactions_archiver', '_controller' => 'App\\Controller\\TransactionsController::archiver'], ['id'], ['POST' => 0], null, false, false, null]],
        292 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        308 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [[['_route' => 'block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['POST' => 0], null, false, false, null]],
        335 => [[['_route' => 'deblock', '_controller' => 'App\\Controller\\UserController::deblock'], ['id'], ['POST' => 0], null, false, false, null]],
        380 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        411 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        450 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        484 => [
            [['_route' => 'api_comptes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        522 => [
            [['_route' => 'api_comptes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comptes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        566 => [
            [['_route' => 'api_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        604 => [
            [['_route' => 'api_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        647 => [
            [['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        685 => [
            [['_route' => 'api_transactions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_transactions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
