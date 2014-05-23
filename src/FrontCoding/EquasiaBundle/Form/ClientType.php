<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
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

        $companys = $this->em
            ->getRepository('FrontCodingEquasiaBundle:Company')
            ->findAll();

        $company_options = array('' => '--- Please select ---');
        foreach ($companys as $item) {
            $company_options[$item->getId()] = $item->getNameLanguage1() . ' | ' . $item->getNameLanguage2();
        }

        $contacts = $this->em
            ->getRepository('FrontCodingEquasiaBundle:Contact')
            ->findAll();

        $contact_options = array('' => '--- Please select ---');
        foreach ($contacts as $item) {
            $contact_options[$item->getId()] = $item->getfirstnameLanguage1() . ' ' . $item->getFamilynameLanguage1();
        }

        $builder
            ->add('nameLanguage1', 'text', array(
                'label' => 'Name (English)',
            ))
            ->add('nameLanguage2', 'text', array(
                'label' => 'Name (Native language)',
            ))
            ->add('companyId', 'choice', array(
                'choices' => $company_options,
                'label' => 'Company',
            ))
            ->add('contactId', 'choice', array(
                'choices' => $contact_options,
                'label' => 'Contact',
            ))
            ->add('invoicingNameOfAddressLanguage1', 'text', array(
                'required' => false,
                'label' => 'Invoicing name of address (English)',
            ))
            ->add('invoicingNameOfAddressLanguage2', 'text', array(
                'required' => false,
                'label' => 'Invoicing name of address (Native language)',
            ))
            ->add('invoicingAddressLine1Language1', 'text', array(
                'required' => false,
                'label' => 'Invoicing address line 1 (English)',
            ))
            ->add('invoicingAddressLine1Language2', 'text', array(
                'required' => false,
                'label' => 'Invoicing address line 1 (Native language)',
            ))
            ->add('invoicingAddressLine2Language1', 'text', array(
                'required' => false,
                'label' => 'Invoicing address line 2 (English)',
            ))
            ->add('invoicingAddressLine2Language2', 'text', array(
                'required' => false,
                'label' => 'Invoicing address line 2 (Native language)',
            ))
            ->add('invoicingCityLanguage1', 'text', array(
                'required' => false,
                'label' => 'Invoicing city (English)',
            ))
            ->add('invoicingCityLanguage2', 'text', array(
                'required' => false,
                'label' => 'Invoicing city (Native language)',
            ))
            ->add('invoicingRegionLanguage1', 'text', array(
                'required' => false,
                'label' => 'Invoicing region (English)',
            ))
            ->add('invoicingRegionLanguage2', 'text', array(
                'required' => false,
                'label' => 'Invoicing region (Native language)',
            ))
            ->add('invoicingZipPostalCode', 'text', array(
                'required' => false,
                'label' => 'Invoicing zip / postal code',
            ))
            ->add('invoicingCountryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Invoicing country (English)',
            ))
            ->add('invoicingCountryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Invoicing country (Native language)',
            ))
            ->add('visitingNameOfAddressLanguage1', 'text', array(
                'required' => false,
                'label' => 'Visiting name of address (English)',
            ))
            ->add('visitingNameOfAddressLanguage2', 'text', array(
                'required' => false,
                'label' => 'Visiting name of address (Native language)',
            ))
            ->add('visitingAddressLine1Language1', 'text', array(
                'required' => false,
                'label' => 'Visiting address line 1 (English)',
            ))
            ->add('visitingAddressLine1Language2', 'text', array(
                'required' => false,
                'label' => 'Visiting address line 1 (Native language)',
            ))
            ->add('visitingAddressLine2Language1', 'text', array(
                'required' => false,
                'label' => 'Visiting address line 2 (English)',
            ))
            ->add('visitingAddressLine2Language2', 'text', array(
                'required' => false,
                'label' => 'Visiting address line 2 (Native language)',
            ))
            ->add('visitingCityLanguage1', 'text', array(
                'required' => false,
                'label' => 'Visiting city (English)',
            ))
            ->add('visitingCityLanguage2', 'text', array(
                'required' => false,
                'label' => 'Visiting city (Native language)',
            ))
            ->add('visitingRegionLanguage1', 'text', array(
                'required' => false,
                'label' => 'Visiting region (English)',
            ))
            ->add('visitingRegionLanguage2', 'text', array(
                'required' => false,
                'label' => 'Visiting region (Native language)',
            ))
            ->add('visitingZipPostalCode', 'text', array(
                'required' => false,
                'label' => 'Visiting zip / postal code',
            ))
            ->add('visitingCountryLanguage1', 'text', array(
                'required' => false,
                'label' => 'Visiting country (English)',
            ))
            ->add('visitingCountryLanguage2', 'text', array(
                'required' => false,
                'label' => 'Visiting country (Native language)',
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
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_client';
    }
}
