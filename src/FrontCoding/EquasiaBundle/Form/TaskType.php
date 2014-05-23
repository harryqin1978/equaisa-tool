<?php

namespace FrontCoding\EquasiaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('projectId')
            ->add('priority')
            ->add('category')
            ->add('name')
            ->add('description')
            ->add('assignedTo')
            ->add('assignedBy')
            ->add('checkedBy')
            ->add('datetimeStart')
            ->add('datetimeEnd')
            ->add('datetimeDeadline')
            ->add('espectedDuration')
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
            'data_class' => 'FrontCoding\EquasiaBundle\Entity\Task'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontcoding_equasiabundle_task';
    }
}
