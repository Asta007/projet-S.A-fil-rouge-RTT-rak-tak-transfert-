<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.pDb1k1s' shared service.

return $this->privates['.service_locator.pDb1k1s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'compteRepository' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService.php', true],
    'security' => ['privates', 'security.helper', 'getSecurity_HelperService.php', true],
], [
    'compteRepository' => 'App\\Repository\\CompteRepository',
    'security' => '?',
]);
