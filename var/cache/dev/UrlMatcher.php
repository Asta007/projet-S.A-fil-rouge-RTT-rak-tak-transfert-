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
        '/crud/support' => [[['_route' => 'crud_support_index', '_controller' => 'App\\Controller\\CrudSupportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/crud/support/new' => [[['_route' => 'crud_support_new', '_controller' => 'App\\Controller\\CrudSupportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|ompte/([^/]++)(*:61)'
                    .'|rud/support/([^/]++)(?'
                        .'|(*:91)'
                        .'|/edit(*:103)'
                        .'|(*:111)'
                    .')'
                .')'
                .'|/prestataires/([^/]++)(?'
                    .'|(*:146)'
                    .'|/(?'
                        .'|edit(*:162)'
                        .'|block(*:175)'
                        .'|dblock(*:189)'
                    .')'
                    .'|(*:198)'
                .')'
                .'|/system_user/(?'
                    .'|([^/]++)(?'
                        .'|(*:234)'
                        .'|/(?'
                            .'|edit(*:250)'
                            .'|block(*:263)'
                            .'|deblock(*:278)'
                        .')'
                    .')'
                    .'|login(?'
                        .'|(*:296)'
                        .'|_check(*:310)'
                    .')'
                .')'
                .'|/transactions/([^/]++)/arhiver(*:350)'
                .'|/user/([^/]++)(?'
                    .'|(*:375)'
                    .'|/(?'
                        .'|edit(*:391)'
                        .'|block(*:404)'
                        .'|dblock(*:418)'
                    .')'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:463)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:494)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:536)'
                                .'|mptes(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:570)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:608)'
                                    .')'
                                .')'
                            .')'
                            .'|rud_supports(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:652)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:690)'
                                .')'
                            .')'
                        .')'
                        .'|prestataires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:734)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:772)'
                            .')'
                        .')'
                        .'|transactions(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:815)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:853)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'compte_show', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'crud_support_show', '_controller' => 'App\\Controller\\CrudSupportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        103 => [[['_route' => 'crud_support_edit', '_controller' => 'App\\Controller\\CrudSupportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        111 => [[['_route' => 'crud_support_delete', '_controller' => 'App\\Controller\\CrudSupportController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        146 => [[['_route' => 'prestataires_show', '_controller' => 'App\\Controller\\PrestatairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        162 => [[['_route' => 'prestataires_edit', '_controller' => 'App\\Controller\\PrestatairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        175 => [[['_route' => 'prestataires_blk', '_controller' => 'App\\Controller\\PrestatairesController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'prestataires_deb', '_controller' => 'App\\Controller\\PrestatairesController::dblock'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        198 => [[['_route' => 'prestataires_delete', '_controller' => 'App\\Controller\\PrestatairesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        234 => [[['_route' => 'system_user_show', '_controller' => 'App\\Controller\\SystemUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'system_user_edit', '_controller' => 'App\\Controller\\SystemUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'system_user_block', '_controller' => 'App\\Controller\\SystemUserController::block'], ['id'], ['POST' => 0], null, false, false, null]],
        278 => [[['_route' => 'system_user_deblock', '_controller' => 'App\\Controller\\SystemUserController::deblock'], ['id'], ['POST' => 0], null, false, false, null]],
        296 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SystemUserController::login'], [], ['POST' => 0], null, false, false, null]],
        310 => [[['_route' => 'system_login_check'], [], null, null, false, false, null]],
        350 => [[['_route' => 'transactions_archiver', '_controller' => 'App\\Controller\\TransactionsController::archiver'], ['id'], ['POST' => 0], null, false, false, null]],
        375 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [[['_route' => 'block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['POST' => 0], null, false, false, null]],
        418 => [[['_route' => 'deblock', '_controller' => 'App\\Controller\\UserController::deblock'], ['id'], ['POST' => 0], null, false, false, null]],
        463 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        494 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        536 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        570 => [
            [['_route' => 'api_comptes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        608 => [
            [['_route' => 'api_comptes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comptes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comptes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        652 => [
            [['_route' => 'api_crud_supports_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_crud_supports_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        690 => [
            [['_route' => 'api_crud_supports_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_crud_supports_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_crud_supports_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        734 => [
            [['_route' => 'api_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        772 => [
            [['_route' => 'api_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        815 => [
            [['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        853 => [
            [['_route' => 'api_transactions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_transactions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
