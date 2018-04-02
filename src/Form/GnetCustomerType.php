<?php

namespace App\Form;

use App\Entity\GnetCustomer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GnetCustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('salutation')
            ->add('firstName')
            ->add('lastName')
            ->add('middleName')
            ->add('street')
            ->add('housenumber')
            ->add('addressAddtitionals')
            ->add('city')
            ->add('postalCode')
            ->add('telephon')
            ->add('fax')
            ->add('mobil')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GnetCustomer::class,
        ]);
    }
}
