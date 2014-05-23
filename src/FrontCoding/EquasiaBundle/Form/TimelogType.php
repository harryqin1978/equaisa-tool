<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TimelogType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('taskcode')
            ->add('projectcode')
            ->add('category')
            ->add('name')
            ->add('description')
            ->add('employee')
            ->add('datestart')
            ->add('timestart')
            ->add('dateed')
            ->add('timeed')
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
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Timelog'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_timelog';
    }
}
