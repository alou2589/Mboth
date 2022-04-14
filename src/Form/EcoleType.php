<?php

namespace App\Form;

use App\Entity\Ecole;
use App\Entity\NiveauEtude;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EcoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('niveau_etude', EntityType::class, [
                'class'=>NiveauEtude::class,
                'choice_label'=>'nom_niveau_etude',
                'attr'=>['class'=>'js-example-basic-single']
            ])
            ->add('nom_ecole')
            ->add('description', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ecole::class,
        ]);
    }
}
