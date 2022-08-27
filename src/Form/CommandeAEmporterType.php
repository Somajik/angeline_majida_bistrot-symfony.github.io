<?php

namespace App\Form;

use App\Entity\CommandeAEmporter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class CommandeAEmporterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hour', TimeType::class,[
                "label" => "Heure de la commande",
            ])
            // ->add('status')
            // ->add('date_creation')
            // ->add('reference_commande')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CommandeAEmporter::class,
        ]);
    }
}
