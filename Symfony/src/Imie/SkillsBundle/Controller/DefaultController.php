<?php

namespace Imie\SkillsBundle\Controller;

use Imie\SkillsBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImieSkillsBundle:Default:index.html.twig', array('name' => $name));
    }
}
