<?php

namespace App\Form;

use App\Entity\Sortie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
            ])
            ->add('dateHeureDebut', DateTimeType::class,  [
                'html5' => true,
                'widget' => 'single_text',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
                
            ->add('Duree', TimeType::class, [
                'label' => ' Durée',
                'html5' => true,
                'widget' => 'single_text',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            
            ])
            ->add('dateLimiteInscription', DateTimeType::class, [
                'label' => 'Date limite d\'inscription',
                'html5' => true,
                'widget' => 'single_text',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
                ])
            ->add('nombInscripMax', IntegerType::class, [
                'label' => ' Nombre d\'inscription maximum',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            
            ])
            ->add('infoSortie', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Description',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
