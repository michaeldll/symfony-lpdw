<?php

namespace App\Controller;

use App\Form\AccountCreateType;
use App\Repository\TransactionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Account;
use App\Repository\AccountRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountController extends AbstractController
{
    public function create(Request $request, EntityManagerInterface $em)
    {
        $account = new Account();
        $form = $this->createForm(AccountCreateType::class, $account);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $account = $form->getData();
            $em ->persist($account);
            $em->flush();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('list_accounts');
        }

        return $this->render("account/create.html.twig", [
            'createForm' => $form->createView(),
        ]);
    }

    public function list(AccountRepository $repository)
    {
        $accounts = $repository->findAll();
        return $this->render('account/list.html.twig', [
            'accounts' => $accounts,
        ]);
    }

    public function modify(Account $account, Request $request,  EntityManagerInterface $em)
    {
        $form = $this->createForm(AccountCreateType::class, $account);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $account = $form->getData();

            $em->flush();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('list_accounts');
        }

        return $this->render("account/modify.html.twig", [
            'createForm' => $form->createView(),
        ]);
    }

    public function delete(Account $account, EntityManagerInterface $em)
    {
        $em->remove($account);
        $em->flush();
        return new Response("ok deleted");
    }

    public function showTransactions(Account $account, AccountRepository $accountRepository, TransactionRepository $transactionRepository)
    {
        $accounts = $accountRepository->find($account->getId());

        //$arrivalTransactions = $transactionRepository->find();
        //$departureTransactions = $transactionRepository->find();

        return $this->render('account/showTransactions.html.twig', [
            'accounts' => $accounts,
            //'arrivalTransactions' => $arrivalTransactions,
            //'departureTransactions' => $departureTransactions
        ]);
    }



}
