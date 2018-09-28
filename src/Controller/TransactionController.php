<?php

namespace App\Controller;

use App\Form\TransactionCreateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Transaction;
use App\Entity\Account;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TransactionController extends AbstractController
{
    public function create(Request $request, EntityManagerInterface $em)
    {
        $transaction = new Transaction();
        $form = $this->createForm(TransactionCreateType::class, $transaction);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $transaction = $form->getData();
            $em ->persist($transaction);
            $em->flush();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('list_transactions');
        }

        return $this->render("transaction/create.html.twig", [
            'createForm' => $form->createView(),
        ]);
    }

    public function list(TransactionRepository $repository)
    {
        $transactions = $repository->findAll();
        return $this->render('transaction/list.html.twig', [
            'transactions' => $transactions,
        ]);
    }
    public function delete(Transaction $transaction, EntityManagerInterface $em)
    {
        $em->remove($transaction);
        $em->flush();
        return new Response("ok deleted");
    }

    /**
     * @Entity("Account", expr="repository.find(ben_id)")
     */
    public function payBeneficiary(Request $request, Account $account, Account $ben_id, EntityManagerInterface $em)
    {
        $transaction = new Transaction();
        $transaction->setDepartureAccount($account);
        $transaction->setArrivalAccount($ben_id);
        $form = $this->createForm(TransactionCreateType::class, $transaction);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $transaction = $form->getData();
            $em ->persist($transaction);
            $em->flush();

            return $this->redirectToRoute('list_accounts');
        }

        return $this->render("transaction/payBeneficiary.html.twig", [
            'createForm' => $form->createView(),
            'payingFrom' => $account,
            'payingTo' => $ben_id
        ]);
    }
}