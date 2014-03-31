<?php

namespace Tpfilrouge\skillsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet',			'text')
            ->add('descriptionProjet',  'textarea')
            ->add('avancement',			'integer')
            ->add('dateDebut',			'date')
            ->add('dateFin',			'date')
			->add('etat', 'entity', array(
				'class' =>'TpfilrougeskillsBundle:Etat',
				'property' => 'libelleEtat',
				'multiple' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tpfilrouge\skillsBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tpfilrouge_skillsbundle_projet';
    }
}
