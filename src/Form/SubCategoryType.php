<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\SubCategories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SubCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'attr' => [
                    'class' => 'col-14 col-m-14 col-l-14 col-xl-14'
                ]
            ])
            ->add('slug',TextType::class,[
                'attr' => [
                    'class' => 'col-14 col-m-14 col-l-14 col-xl-14'
                ]
            ])
            ->add('categories')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubCategories::class,
        ]);
    }
}
