<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail_user')
            ->add('roles')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                    'invalid_message' => 'Veuillez choisir le même mot de passe',
                    'options' => ['attr' => ['class' => 'password']],
                    'required' => true,
                    'first_options' => ['label' => 'Nouveau mot de passe'],
                    'second_options' => ['label' => 'Répéter le nouveau'],
            ])
            ->add('name_user')
            ->add('firstname_user')
            ->add('city_user')
            ->add('postalCode_user')
            ->add('address_user')
            ->add('birthday_user')
            ->add('phone_user')
            ->add('picture_user')
            ->add('biography_user')
            ->add('story_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
