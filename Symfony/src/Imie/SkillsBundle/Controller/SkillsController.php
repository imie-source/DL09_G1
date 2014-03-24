<?php

namespace Imie\SkillsBundle\Controller;

use Imie\SkillsBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoudation\Response;

class SkillsController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImieSkillsBundle:Default:index.html.twig', array('name' => $name));
    }
    //Définition de la méthode "ajouter un utilisateur".
	public function ajouterAction()
	{
       //création de l'entité.
        $user = new User();
        $user->setNom('Tom');
        $user->setPrenom('Bob');
        $user->setLogin('mot');
        $user->setPassword('tombob');
        $user->setDescriptif('maitrise la programmation procédurale');
        $user->setDispo(true);
        $user->setEmail('tom@gmail.com');
        $user->	setNumTel('06456574834');
        $user->setAdresse('15, allée Victor Hugo');
        $user->setVille('Nantes');
        $user->setDateNais(new \DateTime('15-03-1985'));
        $user->setCp('44000');		
		//on récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
	
		//Etape1 : on persiste l'entité 
		$em->persist($user);
	
		//Etape2 : on "flush" (exécute les requêtes pour sauvegarder les entités)
		$em->flush();
	
		//Reste de la méthode qu'on avait déjà écrit (Doctrine lui attribut un id)
		if ($this->getRequest()->getMethod() == 'POST')
		{
		$this->get('session')->getFlashBag()->add('info', 'article bien enregistré');
		return $this->redirect($this->generateUrl('ImieSkills_voir', array('id' => $user->getId())) );
		}
	
		return $this->render('ImieSkillsBundle:Skills:ajouter.html.twig');
	}
	//consulter un user
	public function voirAction($id)
	{
		//récupérer le Repository
		$repository = $this->getDoctrine()
						   ->getManager()
						   ->getRepository('ImieSkillsBundle:User');
		//récupérer l'entité correspondant à l'id "$id"
		$user = $repository->find($id);
		//$user est une instance de l'entité Imie\SkillsBundle\Entity\User si l'id existe
		//sinon, il faut envoyer un message d'erreur
		if ($user === null)
		{
			throw $this->createNotFoundException('user [id=',$id , ']inexistant');
		}
		//On récupère le constructeur de formulaire "formBuilder"
		$form = $this->createFormBuilder($user)
		//On ajoute les champs de l'entité qu'on veut voir figurer dans notre formulaire
							->add('nom',	'text')
							->add('prenom',	'text')
							->add('adresse',	'text')
							->add('ville',	'text')
							->add('cp',	'text')
							->add('dispo','checkbox', array('required' =>false))
							->add('email',	'text')
							->add('Enregistrer', 'submit')
							->add('Annuler',     'submit')
							->getForm();
		//on passe la méthode createView() du formulaire à la vue pour qu'elle puisse afficher le formulaire
		return $this->render('ImieSkillsBundle:Skills:vue.html.twig', array(
			'form' => $form->createView(),
			));
	}
	//consulter la liste des users
	public function listerAction($idRole)
	{
		//récupérer le Repository
		$repository = $this->getDoctrine()
						   ->getManager()
						   ->getRepository('ImieSkillsBundle:User');
		//récupérer les users et afficher la liste
		$listeUsers = $repository->findAll();
		if ($idRole == 3){
		foreach ($listeUsers as $user)
		{
			return $this->render('ImieSkillsBundle:Skills:listermodif.html.twig', array('listeUsers' => $listeUsers));
		}
		}else{
			foreach ($listeUsers as $user)
		{
			return $this->render('ImieSkillsBundle:Skills:lister.html.twig', array('listeUsers' => $listeUsers));
		}
		}
		
	}
	
}