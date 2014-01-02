<?php

namespace Myapp\CroisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EscaleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPort')
            ->add('dateDebutEscale')
            ->add('heureDebutEscale')
            ->add('dateFinEscale')
            ->add('heureFinEscale')
            ->add('description','textarea')
            ->add('photo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\CroisiereBundle\Entity\Escale'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_croisierebundle_escale';
    }
}