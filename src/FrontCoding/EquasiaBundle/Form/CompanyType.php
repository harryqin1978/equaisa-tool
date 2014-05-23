<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType
{

    protected $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $jurisdictions = $this->em
            ->getRepository('FrontCodingEquasiaBundle:Jurisdiction')
            ->findAll();

        $jurisdiction_options = array('' => '--- Please select ---');
        foreach ($jurisdictions as $item) {
            $jurisdiction_options[$item->getId()] = $item->getNameLanguage1() . ' | ' . $item->getNameLanguage2();
        }

        $builder
            ->add('nameLanguage1', 'text', array(
                'label' => 'Name (English)',
            ))
            ->add('nameLanguage2', 'text', array(
                'label' => 'Name (Native language)',
            ))
            ->add('jurisdictionId', 'choice', array(
                'choices' => $jurisdiction_options,
                'label' => 'Jurisdiction',
            ))
            ->add('registrationNumber', 'text', array(
                'required' => false,
            ))
            ->add('registrationCityLanguage1', 'text', array(
                'required' => false,
                'label' => 'Registration city (English)',
            ))
            ->add('registrationCityLanguage2', 'text', array(
                'required' => false,
                'label' => 'Registration city (Native language)',
            ))
            ->add('dateOfIncorporation', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'date')
             ))
            ->add('dateOfTermination', 'date', array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'date')
             ))
            ->add('nameOfAddressLanguage1', 'text', array(
                'required' => false,
                'label' => 'Name of address (English)',
            ))
            ->add('nameOfAddressLanguage2', 'text', array(
                'required' => false,
                'label' => 'Name of address (Native language)',
            ))
            ->add('addressLine1Language1', 'text', array(
                'required' => false,
                'label' => 'Address line 1 (English)',
            ))
            ->add('addressLine1Language2', 'text', array(
                'required' => false,
                'label' => 'Address line 1 (Native language)',
            ))
            ->add('addressLine2Language1', 'text', array(
                'required' => false,
                'label' => 'Address line 2 (English)',
            ))
            ->add('addressLine2Language2', 'text', array(
                'required' => false,
                'label' => 'Address line 2 (Native language)',
            ))
            ->add('cityLanguage1', 'text', array(
                'required' => false,
                'label' => 'City (English)',
            ))
            ->add('cityLanguage2', 'text', array(
                'required' => false,
                'label' => 'City (Native language)',
            ))
            ->add('regionLanguage1', 'text', array(
                'required' => false,
                'label' => 'Region (English)',
            ))
            ->add('regionLanguage2', 'text', array(
                'required' => false,
                'label' => 'Region (Native language)',
            ))
            ->add('zipPostalCode', 'text', array(
                'required' => false,
                'label' => 'Zip / postal code',
            ))
            ->add('countryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Country (English)',
            ))
            ->add('countryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Country (Native language)',
            ))
            // ->add('moderator', 'checkbox', array(
            //     'label'     => 'Passed moderator',
            //     'required'  => false,
            //     'data'      => (bool) $this->moderator,
            // ))
            // ->add('stamp')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_company';
    }
}
