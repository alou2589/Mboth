<?php

namespace App\Form;

use App\Entity\Arbre;
use App\Entity\Maison;
use App\Entity\TypeArbre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArbreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_arbre', EntityType::class, [
                'class'=>TypeArbre::class,
                'choice_label'=>'nom_type_arbre',
                'attr'=>['class'=>'js-example-basic-single']
            ])
            ->add('nom_arbre')
            ->add('maison', EntityType::class, [
                'class'=>Maison::class,
                'choice_label'=>'nom_maison',
                'attr'=>['class'>'js-example-basic-single']
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Arbre::class,
        ]);
    }
}
