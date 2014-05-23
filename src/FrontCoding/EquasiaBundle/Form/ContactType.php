<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{

    protected $em;
    protected $operation;

    public function __construct(\Doctrine\ORM\EntityManager $em, $operation)
    {
        $this->em = $em;
        $this->operation = $operation;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $job_titles = $this->em
            ->getRepository('FrontCodingEquasiaBundle:JobTitle')
            ->findAll();

        $job_title_options = array('' => '--- Please select ---');
        foreach ($job_titles as $item) {
            $job_title_options[$item->getId()] = $item->getName();
        }

        $builder
            ->add('firstnameLanguage1', 'text', array(
                'label' => 'First name (English)',
            ))
            ->add('familynameLanguage1', 'text', array(
                'label' => 'Family name (English)',
            ))
            ->add('firstnameLanguage2', 'text', array(
                'label' => 'First name (Native language)',
            ))
            ->add('familynameLanguage2', 'text', array(
                'label' => 'Family name (Native language)',
            ))
            ->add('title')
            ->add('gender', 'choice', array(
                'choices' => array(
                    'male' => 'Male',
                    'female' => 'Female',
                ),
            ))
            ->add('username', 'text', array(
                'disabled' => $this->operation == 'create' ? false : true,
            ))
            ->add('password', 'repeated', array(
                'required' => $this->operation == 'create' ? true : false,
                'first_name'  => 'password',
                'second_name' => 'confirm',
                'type'        => 'password',
            ))
            ->add('company')
            ->add('emailCompany')
            ->add('emailPersonal')
            ->add('emailGoogle')
            ->add('skype')
            ->add('mobile1')
            ->add('mobile2')
            ->add('jobTitleId', 'choice', array(
                'choices' => $job_title_options,
                'label' => 'Job title',
            ))
            ->add('idOrPassport')
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
            ->add('hometownNameOfAddressLanguage1', 'text', array(
                'required' => false,
                'label' => 'Hometown name of address (English)',
            ))
            ->add('hometownNameOfAddressLanguage2', 'text', array(
                'required' => false,
                'label' => 'Hometown name of address (Native language)',
            ))
            ->add('hometownAddressLine1Language1', 'text', array(
                'required' => false,
                'label' => 'Hometown address line 1 (English)',
            ))
            ->add('hometownAddressLine1Language2', 'text', array(
                'required' => false,
                'label' => 'Hometown address line 1 (Native language)',
            ))
            ->add('hometownAddressLine2Language1', 'text', array(
                'required' => false,
                'label' => 'Hometown address line 2 (English)',
            ))
            ->add('hometownAddressLine2Language2', 'text', array(
                'required' => false,
                'label' => 'Hometown address line 2 (Native language)',
            ))
            ->add('hometownCityLanguage1', 'text', array(
                'required' => false,
                'label' => 'Hometown city (English)',
            ))
            ->add('hometownCityLanguage2', 'text', array(
                'required' => false,
                'label' => 'Hometown city (Native language)',
            ))
            ->add('hometownRegionLanguage1', 'text', array(
                'required' => false,
                'label' => 'Hometown region (English)',
            ))
            ->add('hometownRegionLanguage2', 'text', array(
                'required' => false,
                'label' => 'Hometown region (Native language)',
            ))
            ->add('hometownZipPostalCode', 'text', array(
                'required' => false,
                'label' => 'Hometown zip / postal code',
            ))
            ->add('hometownCountryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Hometown country (English)',
            ))
            ->add('hometownCountryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Hometown country (Native language)',
            ))
            ->add('bankNameLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank name (English)',
            ))
            ->add('bankNameLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank name (Native language)',
            ))
            ->add('bankBeneficiaryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank beneficiary (English)',
            ))
            ->add('bankBeneficiaryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank beneficiary (Native language)',
            ))
            ->add('bankBranchNameLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank branch name (English)',
            ))
            ->add('bankBranchNameLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank branch name (Native language)',
            ))
            ->add('bankNameOfAddressLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank name of address (English)',
            ))
            ->add('bankNameOfAddressLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank name of address (Native language)',
            ))
            ->add('bankAddressLine1Language1', 'text', array(
                'required' => false,
                'label' => 'Bank address line 1 (English)',
            ))
            ->add('bankAddressLine1Language2', 'text', array(
                'required' => false,
                'label' => 'Bank address line 1 (Native language)',
            ))
            ->add('bankAddressLine2Language1', 'text', array(
                'required' => false,
                'label' => 'Bank address line 2 (English)',
            ))
            ->add('bankAddressLine2Language2', 'text', array(
                'required' => false,
                'label' => 'Bank address line 2 (Native language)',
            ))
            ->add('bankCityLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank city (English)',
            ))
            ->add('bankCityLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank city (Native language)',
            ))
            ->add('bankRegionLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank region (English)',
            ))
            ->add('bankRegionLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank region (Native language)',
            ))
            ->add('bankZipPostalCode', 'text', array(
                'required' => false,
                'label' => 'Bank zip / postal code',
            ))
            ->add('bankCountryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Bank country (English)',
            ))
            ->add('bankCountryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Bank country (Native language)',
            ))
            ->add('bankNumber')
            ->add('bankIban')
            ->add('dateOfBirth', 'date', array(
                'required' => false,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => array('class' => 'date')
             ))
            ->add('notes')
            ->add('picture')
            ->add('status', 'choice', array(
                'choices' => array(
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ),
            ))
            // ->add('stamp')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_contact';
    }
}
