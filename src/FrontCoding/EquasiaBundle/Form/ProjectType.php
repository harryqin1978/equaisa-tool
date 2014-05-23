<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('name')
            ->add('phase')
            ->add('type')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('dateDeadline')
            ->add('initiator')
            ->add('projectManager')
            ->add('accountManager')
            ->add('description')
            ->add('notes')
            ->add('url')
            ->add('clientRepresentative')
            ->add('contractedClient')
            ->add('contractedEntity')
            ->add('paymentTerms')
            ->add('paymentContractedExcl')
            ->add('paymentContractedTax')
            ->add('paymentOutstandingExcl')
            ->add('paymentOutstandingTax')
            ->add('paymentFullfilledExcl')
            ->add('paymentFullfilledTax')
            ->add('paymentCurrency')
            ->add('paymentTax')
            ->add('paymentReceivedDate')
            ->add('paymentDueDate')
            ->add('proposalStatus')
            ->add('functionalSpecificationStatus')
            ->add('frameworkAgreementStatus')
            ->add('contractStatus')
            ->add('rootId')
            ->add('status')
            ->add('moderator')
            ->add('stamp')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_project';
    }
}
