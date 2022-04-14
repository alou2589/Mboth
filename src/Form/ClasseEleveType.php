<?php

namespace App\Form;

use App\Entity\Ecole;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClasseEleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('personne', EntityType::class, [
                'class'=>Personne::class,
                'choice_label'=>function(Personne $personne){
                    return $personne->getPrenom().''.$personne->getNom();
                },
            ])
            ->add('ecole', EntityType::class, [
                'class'=>Ecole::class,
                'placeholder'=>"Choisissez une école",
                'choice_label'=>'nom_ecole'
            ])
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
