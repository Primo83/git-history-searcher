<?php

declare(strict_types=1);

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class SearchGitRepositoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'repositoryName',
                TextType::class, [
                    'constraints' => [
                        new NotBlank(),
                    ],
                ]
            )
            ->add(
                'phrase',
                TextType::class, [
                    'constraints' => [
                        new NotBlank(),
                    ],
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'method' => 'POST',
                'csrf_protection' => false,
                ]
        );
    }

    public function getBlockPrefix(): string
    {
        return '';
    }
}
