<?php

namespace App\Form;

use App\Entity\Cellule;
use App\Entity\Secteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SecteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_secteur')
            ->add('cellule', EntityType::class, [
                'class'=>Cellule::class,
                'choice_label'=>'nom_cellule',
                'attr'=>['class'=>'js-example-basic-single']
            ])
            ->add('localisation', TextareaType::class, [
                'attr'=> [
                    'class'=>'tinymce'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Secteur::class,
        ]);
    }
}
