<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\ArrayType;
use Doctrine\DBAL\Types\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('emailUser')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('adresseUser')
            ->add('telephoneUser')
            ->add('cni')
            ->add('statusUser')
            ->add('prestataire')
            ->add('compteAssocie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
