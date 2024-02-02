<?php

namespace App\Form;

use App\Entity\Recette;
use App\Entity\IngredientRecette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AddRecipeFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ['attr' => ['class' => 'form-control'], 'label' => 'Titre'])
            ->add('description', null, ['attr' => ['class' => 'form-control p-2'], 'label' => 'Description'])
            ->add('img', FileType::class, [
                'label' => 'Image de la recette',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'accept' => 'image/*',
                    'class' => 'form-control-file',
                ],
            ]);
    }
   
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
