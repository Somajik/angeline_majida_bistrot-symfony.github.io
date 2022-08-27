<?php

namespace App\Form;

use App\Entity\Formule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FormuleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name',TextType::class,[
                'label' => "Nom de la formule : ",
            ])
            ->add('description', TextareaType::class,[
                'label' => "Description de la formule : ",
            ])
            ->add('price', NumberType::class,[
                'label' => "Prix de la formule : ",
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
                            'image/svg',
                        ],
                        'mimeTypesMessage'=>'Extension de fichier invalide',
                    ])
                    ],
                'attr'=>[
                    'class'=>'form-control',
                ],
                'data_class'=>null,
            ])
            ->add('status',ChoiceType::class, [
                "label" => "Affichage dans la carte du restaurant : ",
                "choices" => [
                    "Visible" => true,
                    "Non Visible" => false,
                ],
                'multiple' => false,
                'expanded' => true,
            ])
            ->add('date_creation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formule::class,
        ]);
    }
}
