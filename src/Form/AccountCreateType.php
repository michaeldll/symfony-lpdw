<?php

namespace App\Form;

use App\Entity\Account;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class AccountCreateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('balance')
            ->add('beneficiary', EntityType::class, [
                'class' => Account::class,
                'choice_label' => 'name',
                'multiple'=> true,
                'required'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Account::class,
        ]);
    }
}
