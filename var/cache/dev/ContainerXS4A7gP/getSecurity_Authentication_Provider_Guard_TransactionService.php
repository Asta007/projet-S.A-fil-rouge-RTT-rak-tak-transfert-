<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.transaction' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-core/User/UserChecker.php';

return $this->privates['security.authentication.provider.guard.transaction'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ($this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $this->load('getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService.php'));
}, 1), ($this->privates['security.user.provider.concrete.app_user_provider'] ?? $this->load('getSecurity_User_Provider_Concrete_AppUserProviderService.php')), 'transaction', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())));
