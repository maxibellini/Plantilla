<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.o9PmENj' shared service.

return $this->privates['service_locator.o9PmENj'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('passwordEncoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'));
}));
