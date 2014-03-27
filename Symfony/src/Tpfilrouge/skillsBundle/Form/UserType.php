<?php

namespace Tpfilrouge\skillsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',		'text')
            ->add('prenom',		'text')
            ->add('login',		'text')
            ->add('password',	'text')
            ->add('descriptif',	'text')
            ->add('dispo',		'checkbox', array('required' =>false))
            ->add('email',		'email')
            ->add('numTel',		'integer')
            ->add('adresse',	'text')
            ->add('cp',			'integer')
            ->add('ville',		'text')
            ->add('dateNais',	'birthday')
			->add('role', 'entity', array(
				'class' =>'TpfilrougeskillsBundle:Role',
				'property' => 'libelleRole',
				'multiple' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tpfilrouge\skillsBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tpfilrouge_skillsbundle_user';
    }
}
