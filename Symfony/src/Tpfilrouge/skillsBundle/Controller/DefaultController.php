<?php

namespace Tpfilrouge\skillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tpfilrouge\skillsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use tpfilrouge\skillsBundle\Form\UserType;
use tpfilrouge\skillsBundle\Entity\Projet;
use tpfilrouge\skillsBundle\Form\ProjetType;
use tpfilrouge\skillsBundle\Entity\competence;
use tpfilrouge\skillsBundle\Entity\RecursiveCompetenceIterator;
use \RecursiveIteratorIterator;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TpfilrougeskillsBundle:Default:index.html.twig', array('name' => $name));
    }
	
	
	public function CompetencesAction(){
		
		
		$em = $this->getDoctrine()->getManager();
		$root_categories = $em->getRepository('TpfilrougeskillsBundle:Competence')->findBy(array('parent_competence' => null));

		$collection = new \Doctrine\Common\Collections\ArrayCollection($root_categories);
		$category_iterator = new RecursiveCompetenceIterator($collection);
		$recursive_iterator = new RecursiveIteratorIterator($category_iterator, RecursiveIteratorIterator::SELF_FIRST);

		var_dump($collection);
		var_dump($category_iterator);
		var_dump($recursive_iterator);
		
		
		foreach ($recursive_iterator as $index => $child_category)
		{
			echo '<option value="' . $child_category->getId() . '">' . str_repeat('&nbsp;&nbsp;', $recursive_iterator->getDepth()) . $child_category->getTitle() . '</option>';
		}
		
	}
	
}
