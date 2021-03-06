<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.tDNu2os' shared service.

return $this->privates['.service_locator.tDNu2os'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('account' => function (): \App\Entity\Account {
    return ($this->privates['.errored..service_locator.tDNu2os.App\Entity\Account'] ?? $this->load('getAccount2Service.php'));
}, 'accountRepository' => function (): \App\Repository\AccountRepository {
    return ($this->privates['App\Repository\AccountRepository'] ?? $this->load('getAccountRepositoryService.php'));
}, 'transactionRepository' => function (): \App\Repository\TransactionRepository {
    return ($this->privates['App\Repository\TransactionRepository'] ?? $this->load('getTransactionRepositoryService.php'));
}));
