<?php
// src/EventListener/TransactionIndexer.php
namespace App\EventListener;

// for Doctrine < 2.4: use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\Transaction;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class TransactionListener
{
    public function postPersist(LifecycleEventArgs $args)
    {
        $transaction = $args->getObject();
        $em = $args->getObjectManager();
        if ($transaction instanceof Transaction)
        {
            $departureAccount = $transaction->getDepartureAccount();
            $departureAccount->substractFromBalance($transaction->getAmount());

            $arrivalAccount = $transaction->getArrivalAccount();
            $arrivalAccount->addToBalance($transaction->getAmount());

            $em->flush();
        }
    }
}