<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('location')
            ->add('date', null, [
                'widget' => 'single_text'
            ])
            ->add('startHour')
            ->add('endHour')
            
            ->add('maxPlayer')

            ->add('checkAvgAge')

            ->add('minAge')
            ->add('maxAge')
            
            ->add('firstNameLeader')
            
            ->add('description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
