<?php

namespace App\Form;

use App\Entity\Maison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SecteurMaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_maison')
            ->add('existence_eau', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
            ])
            ->add('existence_electricite', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
            ])
            ->add('existence_fosse_septique', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
            ])
            ->add('existence_arbre', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
            ])
            ->add('existence_internet', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
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
            'data_class' => Maison::class,
        ]);
    }
}
