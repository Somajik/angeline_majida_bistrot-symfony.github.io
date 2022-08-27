<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label' => "Nom de la catégorie :",
            ])
            ->add('idname', TextType::class,[
                'label' => "Nom de la catégorie (sans accent/espace/caractère spécial) : ",
            ])
            ->add('images', FileType::class,[
                'label' => "Îcone de la catégorie :",
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
            'data_class' => Category::class,
        ]);
    }
}
