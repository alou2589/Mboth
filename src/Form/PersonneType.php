<?php

namespace App\Form;

use App\Entity\Maison;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('date_naissance', DateType::class, [ 
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                ])
            ->add('lieu_naissance')
            ->add('sexe', ChoiceType::class, [
                'choices'=> [
                    'Homme'=>'Homme',
                    'Femme'=>'Femme'
                ]
            ])
            ->add('situation_matrimoniale', ChoiceType::class, [
                'choices'=> [
                    'Marié'=>'Marié',
                    'Divorcé'=>'Divorcé',
                    'Célibataire'=>'Célibataire',
                ]
            ])
            ->add('maison', EntityType::class, [
                'class'=>Maison::class,
                'choice_label'=> function(Maison $maison) { return $maison->getNomMaison().'-'.$maison->getCodeMaison();}
            ])
            ->add('existence_maladie', ChoiceType::class, [
                'choices'=> [
                    'Oui'=>'Oui',
                    'Non'=>'Non'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
