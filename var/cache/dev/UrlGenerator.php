<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'compte_index' => [[], ['_controller' => 'App\\Controller\\CompteController::index'], [], [['text', '/compte/']], [], []],
    'compte_new' => [[], ['_controller' => 'App\\Controller\\CompteController::new'], [], [['text', '/compte/new']], [], []],
    'compte_show' => [['id'], ['_controller' => 'App\\Controller\\CompteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte']], [], []],
    'crud_support_index' => [[], ['_controller' => 'App\\Controller\\CrudSupportController::index'], [], [['text', '/crud/support/']], [], []],
    'crud_support_new' => [[], ['_controller' => 'App\\Controller\\CrudSupportController::new'], [], [['text', '/crud/support/new']], [], []],
    'crud_support_show' => [['id'], ['_controller' => 'App\\Controller\\CrudSupportController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/support']], [], []],
    'crud_support_edit' => [['id'], ['_controller' => 'App\\Controller\\CrudSupportController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/crud/support']], [], []],
    'crud_support_delete' => [['id'], ['_controller' => 'App\\Controller\\CrudSupportController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/crud/support']], [], []],
    'prestataires_index' => [[], ['_controller' => 'App\\Controller\\PrestatairesController::index'], [], [['text', '/prestataires/']], [], []],
    'prestataires_thepdf' => [[], ['_controller' => 'App\\Controller\\PrestatairesController::thepdf'], [], [['text', '/prestataires/thepdf']], [], []],
    'prestataires_new' => [[], ['_controller' => 'App\\Controller\\PrestatairesController::new'], [], [['text', '/prestataires/new']], [], []],
    'prestataires_show' => [['id'], ['_controller' => 'App\\Controller\\PrestatairesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prestataires']], [], []],
    'prestataires_edit' => [['id'], ['_controller' => 'App\\Controller\\PrestatairesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/prestataires']], [], []],
    'prestataires_blk' => [['id'], ['_controller' => 'App\\Controller\\PrestatairesController::block'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id', true], ['text', '/prestataires']], [], []],
    'prestataires_deb' => [['id'], ['_controller' => 'App\\Controller\\PrestatairesController::dblock'], [], [['text', '/dblock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/prestataires']], [], []],
    'generate_pdf' => [['id'], ['_controller' => 'App\\Controller\\PrestatairesController::pdf'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/prestataires/pdf']], [], []],
    'system_user_index' => [[], ['_controller' => 'App\\Controller\\SystemUserController::index'], [], [['text', '/system_user/']], [], []],
    'system_user_new' => [[], ['_controller' => 'App\\Controller\\SystemUserController::new'], [], [['text', '/system_user/new']], [], []],
    'system_user_show' => [['id'], ['_controller' => 'App\\Controller\\SystemUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/system_user']], [], []],
    'system_user_edit' => [['id'], ['_controller' => 'App\\Controller\\SystemUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/system_user']], [], []],
    'system_user_block' => [['id'], ['_controller' => 'App\\Controller\\SystemUserController::block'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id', true], ['text', '/system_user']], [], []],
    'system_user_deblock' => [['id'], ['_controller' => 'App\\Controller\\SystemUserController::deblock'], [], [['text', '/deblock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/system_user']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SystemUserController::login'], [], [['text', '/system_user/login']], [], []],
    'transactions_index' => [[], ['_controller' => 'App\\Controller\\TransactionsController::index'], [], [['text', '/transactions/']], [], []],
    'transactions_new' => [[], ['_controller' => 'App\\Controller\\TransactionsController::new'], [], [['text', '/transactions/new']], [], []],
    'transactions_archiver' => [['id'], ['_controller' => 'App\\Controller\\TransactionsController::archiver'], [], [['text', '/arhiver'], ['variable', '/', '[^/]++', 'id', true], ['text', '/transactions']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'block' => [['id'], ['_controller' => 'App\\Controller\\UserController::block'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'deblock' => [['id'], ['_controller' => 'App\\Controller\\UserController::deblock'], [], [['text', '/dblock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_prestataires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/prestataires']], [], []],
    'api_prestataires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/prestataires']], [], []],
    'api_prestataires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], []],
    'api_prestataires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], []],
    'api_prestataires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Prestataires', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/prestataires']], [], []],
    'api_comptes_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/comptes']], [], []],
    'api_comptes_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/comptes']], [], []],
    'api_comptes_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/comptes']], [], []],
    'api_comptes_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/comptes']], [], []],
    'api_comptes_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Compte', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/comptes']], [], []],
    'api_crud_supports_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/crud_supports']], [], []],
    'api_crud_supports_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/crud_supports']], [], []],
    'api_crud_supports_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/crud_supports']], [], []],
    'api_crud_supports_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/crud_supports']], [], []],
    'api_crud_supports_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CrudSupport', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/crud_supports']], [], []],
    'api_transactions_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transactions', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
];
