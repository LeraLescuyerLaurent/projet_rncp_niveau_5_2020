<?php

namespace App\Form;

use App\Entity\Posts;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('Category',EntityType::class,[
                'class' => 'App\Entity\Categories',
                'label' => "choisir une Catégorie",
                'placeholder' => 'Catégorie',
                'mapped' => false
                ])
            ->add('imagesUne')
            ->add('hat',TextareaType::class)
            ->add('content')
            ->add('online')
            ->add('slider')
        ;




        $builder->get('Category')->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event){
                $form = $event->getForm();
                $form->getParent()->add('subCategory', EntityType::class,[
                    'class' => "App\Entity\SubCategories",
                    'label' => "choisir une sous-catégorie",
                    'placeholder' => "Sous-Catégorie",
                    'choices' => $form->getData()->getSubcategory()
                ]);
            }
        );
        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function(FormEvent $event){
                $form = $event->getForm();
                $data = $event->getData();
                $subCategorie = $data->getsubCategory();
                if ($subCategorie) {
                $form->get('Category')->setData($subCategorie->getCategories());
                    $form->add('subCategory', EntityType::class,[
                        'class' => "App\Entity\SubCategories",
                        'label' => "choisir une sous-catégorie",
                        'placeholder' => "Sous-Catégorie",
                        'choices' => $subCategorie->getCategories()->getSubcategory()
                    ]);
                }else{
                    $form->add('subCategory', EntityType::class,[
                        'class' => "App\Entity\SubCategories",
                        'label' => "choisir une sous-catégorie",
                        'placeholder' => "Sous-Catégorie",
                        'choices' =>[]
                    ]);
                }
            }
        );

































// 
// 

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posts::class,
        ]);
    }
}
