<?php

namespace App\Form;

use App\Entity\Maladie;
use App\Entity\TypeMaladie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaladieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_maladie')
            ->add('type_maladie', EntityType::class, [
                'class'=>TypeMaladie::class,
                'choice_label'=>'nom_type_maladie',
                'attr'=>['class'=>'js-example-basic-single']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maladie::class,
        ]);
    }
}
