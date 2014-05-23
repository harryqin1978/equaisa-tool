<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JurisdictionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameLanguage1', 'text', array(
                'label' => 'Name (English)',
            ))
            ->add('nameLanguage2', 'text', array(
                'label' => 'Name (Native language)',
            ))
            ->add('countryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Country (English)',
            ))
            ->add('countryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Country (Native language)',
            ))
            ->add('description', 'textarea',array(
                'required' => false,
            ))
            // ->add('moderator')
            // ->add('stamp')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Jurisdiction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_jurisdiction';
    }
}
