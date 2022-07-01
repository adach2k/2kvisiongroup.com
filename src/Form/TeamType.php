<?php

namespace App\Form;

use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'label' =>  false,
                'required' => true,
            ])
            ->add('firstName', TextType::class, [
                'label' =>  false,
                'required' => true,
            ])
            ->add('email', EmailType::class, [
                'label' =>  false,
                'required' => true,
            ])
            ->add('profil', TextType::class, [
                'label' =>  false,
                'required' => false,
            ])
            ->add('role', TextType::class, [
                'label' =>  false,
                'required' => true,
            ])
            ->add('birthDate', DateType::class, [
                'label'  =>  false,
                'required'  =>  false,
            ])
            ->add('imageFile', FileType::class, [
                'label' =>  false,
                'required'  =>  false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
