<?php

namespace App\Form\Extension\Addressing;

use Sylius\Bundle\AddressingBundle\Form\Type\CountryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class CountryTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('flag', TextType::class, [
                'required'=>false,
                'label'=>'Flag'
            ]);
    }


    public static function getExtendedTypes(): iterable
    {
        return [CountryType::class];
    }
}
