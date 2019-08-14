<?php

namespace App\Form;

use App\Entity\Prestataires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrestatairesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('denomination')
            ->add('adressePrest')
            ->add('contactePrest')
            ->add('emailPrest')
            ->add('statusPrest')
            ->add('imagefile',FileType::class,[
                'mapped'=>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prestataires::class,
        ]);
    }
}
