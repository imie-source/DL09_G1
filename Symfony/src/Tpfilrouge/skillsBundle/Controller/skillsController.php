<?php
//src/Tpfilrouge/skillsBundle/controller/skillsController.php

namespace Tpfilrouge\skillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tpfilrouge\skillsBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use tpfilrouge\skillsBundle\Form\UserType;
use tpfilrouge\skillsBundle\Entity\Projet;
use tpfilrouge\skillsBundle\Form\ProjetType;

class skillsController extends Controller
{
    public function indexAction() {
        return $this->render('TpfilrougeskillsBundle:skills:index.html.twig');
    }

	public function voirProjetAction($id) {
		  // On récupère le projet
			$projet = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('TpfilrougeskillsBundle:Projet')
                                ->find($id);
	
			$form = $this->createForm(new ProjetType, $projet);

            // On récupère la requête
			$request = $this->get('request');

			// On vérifie qu'elle est de type POST
			if ($request->getMethod() == 'POST') {
                //la variable $projet va contenir les valeurs saisies dans le formulaire
                $form->bind($request);
                // On vérifie que les valeurs entrées sont correctes
                if ($form->isValid()) {
                    // On l'enregistre notre objet $projet dans la base de données 
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($projet);
                    $em->flush();
                    return $this->render('TpfilrougeskillsBundle:skills:okProjet.html.twig');
                } 
			}
			return $this->render('TpfilrougeskillsBundle:skills:vueProjet.html.twig', array('form' => $form->createView(), ));
		}
	
	public function listerProjetAction($idRole) {
		//récupérer le repository
		$repository = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('TpfilrougeskillsBundle:Projet');
		//récupérer les users et afficher la liste
		$listeProjets = $repository->findAll();
		if ($idRole == 3) {
			foreach ($listeProjets as $projet) {
                return $this->render('TpfilrougeskillsBundle:skills:listeModifProjet.html.twig', array('listeProjets' => $listeProjets));
			}
		}
		else {
			foreach ($listeProjets as $projet) {
                return $this->render('TpfilrougeskillsBundle:skills:listeProjets.html.twig', array('listeProjets' => $listeUsers));
			}
		}
	}

    public function ajouterProjetAction() {
		$projet = new Projet;

		$form = $this->createForm(new ProjetType, $projet);

		// On récupère la requête
		$request = $this->get('request');

		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
            //La variable $projet va contenir les valeurs passées dans le formulaire
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isValid()) {
            // On l'enregistre notre objet $user dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($projet);
                $em->flush();
                return $this->render('TpfilrougeskillsBundle:skills:okProjet.html.twig');
            }
		}
		
		return $this->render('TpfilrougeskillsBundle:skills:vueProjet.html.twig', array('form' => $form->createView(), ));
    }
    public function voirAction($id) {
        // On récupère le user
        $user = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('TpfilrougeskillsBundle:User')
                        ->find($id);

        $form = $this->createForm(new UserType, $user);

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le user
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isValid()) {
                // On l'enregistre notre objet $user dans la base de données 
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->render('TpfilrougeskillsBundle:skills:okUser.html.twig');
            } 
        }
        return $this->render('TpfilrougeskillsBundle:skills:vue.html.twig', array( 'form' => $form->createView(), ));
    }
	
	public function listerAction($idRole) {
        //récupérer le repository
        $repository = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('TpfilrougeskillsBundle:User');

                                //récupérer les users et afficher la liste
        $listeUsers = $repository->findAll();
        if ($idRole == 3) {
            foreach ($listeUsers as $user) {
                return $this->render('TpfilrougeskillsBundle:skills:listmodif.html.twig', array('listeUsers' => $listeUsers));
            }
        }
        else {
            foreach ($listeUsers as $user) {
                return $this->render('TpfilrougeskillsBundle:skills:lister.html.twig', array('listeUsers' => $listeUsers));
            }
        }
	}

    public function ajouterAction() {
        $user = new User;

        $form = $this->createForm(new UserType, $user);

        // On récupère la requête
        $request = $this->get('request');

        // On vérifie qu'elle est de type POST
        if ($request->getMethod() == 'POST') {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le user
            $form->bind($request);
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isValid()) {
                // On l'enregistre notre objet $user dans la base de données
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->render('TpfilrougeskillsBundle:skills:okUser.html.twig');
            }
        }

        return $this->render('TpfilrougeskillsBundle:skills:vue.html.twig', array('form' => $form->createView(), ));
    }

}
