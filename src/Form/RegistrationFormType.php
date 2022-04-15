<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
                'attr'=>[
                    'placeholder'=>'Votre adresse email'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [

                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'attr'=>[
                    'placeholder'=>'Votre date de Naissance'
                ],
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('name', TextType::class, [
                'label'=> " Noms: ",
                'attr'=>[
                    'placeholder'=>'Votre nom'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'=> " Prénoms: ",
                'attr'=>[
                    'placeholder'=>'Votre prénoms'
                ]
            ])
            ->add('dateNaissance', DateType::class, [
                'label'=> "Date de Naissance :",
                'widget'=>"single_text",

            ])
            ->add('lieuNaissance', TextType::class, [
                'label'=> "Lieu de Naissance :",
                'attr'=>[
                    'placeholder'=>'Votre lieu de Naissance'
                ]
            ])
            ->add('address', TextType::class, [
                'label'=> " Adresse :",
                'attr'=>[
                    'placeholder'=>'Votre adresse'
                ]
            ])
            ->add('contact', TextType::class, [
                'label'=> " Contact",
                'attr'=>[
                    'placeholder'=>'Votre contact'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
