<?php

namespace Myapp\CroisiereBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BateauType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomBateau')
            ->add('categorie')
            ->add('typeBateau')
            ->add('dateEnservie')
            ->add('nombrePassange')
            ->add('tonnage')
            ->add('longeur')
            ->add('largeur')
            ->add('vitesse')
            ->add('Affichable','checkbox',array('required' => false))

           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\CroisiereBundle\Entity\Bateau'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_croisierebundle_bateau';
    }
}
