<?php

namespace App\Form;

use App\Entity\Cellule;
use App\Entity\Quartier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CelluleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_cellule')
            ->add('quartier', EntityType::class, [
                'class'=>Quartier::class,
                'choice_label'=>'nom_quartier',
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
            'data_class' => Cellule::class,
        ]);
    }
}
