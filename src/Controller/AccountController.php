<?php

namespace App\Controller;

use App\Form\AccountCreateType;
use App\Form\BeneficiaryCreateType;
use App\Repository\TransactionRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
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
        return $this->redirectToRoute('list_accounts');
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

    public function addBeneficiary(Account $account, Request $request,  EntityManagerInterface $em)
    {
        $form = $this->createForm(BeneficiaryCreateType::class, $account);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $beneficiaries = $form->get("beneficiary")->getData();
            foreach ($beneficiaries as $ben){
                $account->addBeneficiary($ben);
            }

            $em->flush();

            return $this->redirectToRoute('list_accounts');
        }

        return $this->render("account/addBeneficiary.html.twig", [
            'createForm' => $form->createView(),
        ]);
    }

    /**
     * @Entity("Account", expr="repository.find(ben_id)")
     * @param Account $account
     * @param Account $ben_id
     * @param EntityManagerInterface $em
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBeneficiary(Account $account, Account $ben_id, EntityManagerInterface $em)
    {
        $account->removeBeneficiary($ben_id);
        $em->flush();
        return $this->redirectToRoute('list_accounts');

        /*
        TEST
        $qb = $em->createQueryBuilder();
        $qb->delete($account)
            ->from('Account', '$account')
            ->where('beneficiary = ?1');
        $em->flush();
        return $this->redirectToRoute('list_accounts');

         */
    }
}
