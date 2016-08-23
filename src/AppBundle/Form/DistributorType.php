<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DistributorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('password')
            ->add('roles',ChoiceType::class, array(
                'choices' => array(
                  'ROLE_SALES' => 'Distribution',
                  'ROLE_SALES' => 'Sales'
                ),
                'required'    => false,
                'placeholder' => 'Choose categoriy',
                'empty_data'  => null
            ))
            ->add('firstName')
            ->add('lastName')
            // ->add('birthDate', DateTimeType::class)
            ->add('phoneNumber')
            ->add('country')
            ->add('city')
            ->add('address')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Distributor'
        ));
    }
}
