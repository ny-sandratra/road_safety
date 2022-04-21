<?php

namespace App\Form;

use App\Entity\Contact; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('noms',TextType::class,[
                'label'=>'Noms : ',
                'attr'=>[
                    'placeholder'=>'Ajouter votre nom',
                    'class'=>'form-control'
                ]
            ])
            ->add('prenoms',TextType::class,[
                'label'=>'Prénoms : ',
                'attr'=>[
                    'placeholder'=>'Ajouter vos prénoms',
                    'class'=>'form-control'
                ]
            ])
            ->add('message',TextareaType::class,[
                'label' => 'Messages',
                'attr'=>[
                    'label'=>'Ecrire quelque chose ...',
                    'class'=>'form-control'
                ]
            ])
            ->add('objet',TextType::class,[
                'label'=>'Objets : ',
                'attr'=>[
                    'placeholder'=>'Ajouter un objet',
                    'class'=>'form-control'
                ]
            ])
            ->add('email',EmailType::class,[
                'label'=>'Adresse email : ',
                'attr'=>[
                    'placeholder'=>'Ajouter votre email',
                    'class'=>'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
