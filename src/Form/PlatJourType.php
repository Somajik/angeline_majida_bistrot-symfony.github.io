<?php

namespace App\Form;

use App\Entity\Plat;
use App\Entity\PlatJour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PlatJourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                "label" => "Nom du plat : "
            ])
            // ->add('plats',EntityType::class, [
            //     "label" => "Plat du jour : ",
            //     'class' => Plat::class,
            //     'mapped' => false,
            //     'choice_label'=> 'name',                
            // ])
            ->add('price', NumberType::class,[
                'label' => "Prix du plat du jour : ",
            ])
            ->add('date_creation', DateType::class,[
                'label' => "Ce plat du jour a été visible sur la carte le : ",
            ])
            ->add('status', ChoiceType::class,[
                'label' => "Visibilité du plat du jour : ",
                "choices" => [
                    "Visible" => true,
                    "Non visible" => false,
                ]
            ])
            ->add('images', FileType::class,[
                'label' => false,
                'multiple' => false,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize'=>'16384k',
                        'maxSizeMessage'=>"L'image est trop volumineuse !",
                        'mimeTypes'=>[
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage'=>'Extension de fichier invalide',
                    ])
                    ],
                'attr'=>[
                    'class'=>'form-control',
                ],
                'data_class'=>null,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PlatJour::class,
        ]);
    }
}
