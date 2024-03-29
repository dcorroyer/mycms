<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class'       => 'surname',
                    'placeholder' => 'SURNAME / NOM *'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class'       => 'name',
                    'placeholder' => 'FIRSTNAME / PRENOM *'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr'  => [
                    'class'       => 'email',
                    'placeholder' => 'EMAIL *'
                ]
            ])
            ->add('subject', TextType::class, [
                'label' => false,
                'attr'  => [
                    'class'       => 'subject',
                    'placeholder' => 'SUBJECT / SUJET *'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => false,
                'attr'  => [
                    'class'       => 'message',
                    'placeholder' => 'YOUR MESSAGE / VOTRE MESSAGE *'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
