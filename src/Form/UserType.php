<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class , [
                'attr' => ['class' => 'form-control', 'placeholder' => "Nom du user"]
            ])
            ->add('email', TextType::class , [
                'attr' => ['class' => 'form-control', 'placeholder' => "Mail du user"]
            ])
            ->add('date_inscription', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => ""],
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
