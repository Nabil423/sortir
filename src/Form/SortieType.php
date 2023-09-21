<?php

namespace App\Form;

use App\Entity\Sortie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ['label' => 'Nom'])
            ->add('dateHeureDebut', DateTimeType::class, ['label' => 'Date et heure de début'])
            ->add('Duree', TimeType::class, ['label' => ' Durée'])
            ->add('dateLimiteInscription', DateTimeType::class, ['label' => 'Date limite d\'inscription'])
            ->add('nombInscripMax', IntegerType::class, ['label' => ' Nombre d\'inscription maximum'])
            ->add('infoSortie', TextType::class, ['label'=> 'Infos sortie'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sortie::class,
        ]);
    }
}
