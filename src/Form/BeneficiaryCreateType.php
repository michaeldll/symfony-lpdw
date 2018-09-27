<?php

namespace App\Form;

use App\Entity\Account;
use App\Repository\AccountRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class BeneficiaryCreateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $account = $builder->getData();
        $builder
            ->add('beneficiary', EntityType::class, [
                'class' => Account::class,
                'choice_label' => 'name',
                'multiple'=> true,
                'mapped' => false,
                'query_builder' => function (AccountRepository $er) use ($account) {
                    $qb = $er->createQueryBuilder('a')
                        ->where('a != ?1')
                        ->setParameter(1, $account);

                    if ($account->getBeneficiary()->count() > 0) {
                        $qb->andWhere('a.id NOT IN (:beneficiaries)')
                            ->setParameter('beneficiaries', $account->getBeneficiary());
                    }
                    return $qb;
                }]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
