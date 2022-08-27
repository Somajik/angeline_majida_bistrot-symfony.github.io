<?php

namespace App\Form;

use App\Entity\Plat;
use App\Entity\Formule;
use App\Entity\Category;
use App\Entity\PlatJour;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                "label" => "Nom du plat : "
            ])
            ->add('price', NumberType::class,[
                "label" => "Prix du plat : "
            ])
            ->add('description', TextareaType::class,[
                "label" => "Description du plat : "
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
            ->add('formule_number', EntityType::class,[
                'label' => "Formule : ",
                'class' => Formule::class,
                'choice_label'=> 'name',
                'multiple' => false,
                'expanded' => false,            
            ])
            ->add('plat_jour_number',EntityType::class, [
                "label" => "Plat du jour : ",
                'class' => PlatJour::class,
                'choice_label'=> 'id',
            ])
            ->add('category_number', EntityType::class,[
                "label" => "Appartient à la catégorie : ",
                'class' => Category::class,
                'choice_label'=> 'name',
                'multiple' => false,
                'expanded' => false,            
            ])
            ->add('a_emporter', ChoiceType::class,[
                "label" => "A emporter : ",
                "choices" => [
                    "Désactivé" => false,
                    "Activer" => true,
                ]
            
            ])
            // ->add('commandeLignes')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }
}
