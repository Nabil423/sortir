<?php

namespace App\Form;

use App\Entity\Campus;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, ['label'=> 'Email'])
            ->add('password', TextType::class,['label' => 'Password'])
            ->add('Pseudo', TextType::class, [ 'label'=>'Pseudo'])
            ->add('Nom', TextType::class, ['label' =>' Nom'])
            ->add('Prenom', TextType::class, ['label'=> 'Prenom'])
            ->add('Telephone', TextType::class, ['label'=>'Telephone'])
            ->add('Campus', Campus::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
