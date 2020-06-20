<?php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormatsMediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {$builder
         ->add('name')
         ->add('format', ChoiceType::class, [ 'choices' => [
            'small' => '_s',
            'medium' => '_m',
            'large' => '_l'
            ],
        'preferred_choices' => ['medium', '_m'],
    ]);}

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
