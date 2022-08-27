<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use App\Entity\AdminReservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('date_reservation',DateTimeType::class)
            ->add('guest_number',IntegerType::class,[
                'label' => "Nombre d'invités : ",
            ])
            
            ->add('options',ChoiceType::class,[
                'choices' => [
                    "Option Terrasse" => "terrasse",
                    "Accès Handicapé" => "handicap",
                    "Chaise Bébé" => "bébé",
                ],
                'required' => false,
                'multiple' => false,
                'expanded' => false,                
            ])
            ->add('message',TextareaType::class,[
                'label' => "Message"
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdminReservation::class,
        ]);
    }
}
