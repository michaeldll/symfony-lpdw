<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.m3hBeYH' shared service.

return $this->privates['.service_locator.m3hBeYH'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'transaction' => function (): \App\Entity\Transaction {
    return ($this->privates['.errored..service_locator.m3hBeYH.App\Entity\Transaction'] ?? $this->load('getTransactionService.php'));
}));
