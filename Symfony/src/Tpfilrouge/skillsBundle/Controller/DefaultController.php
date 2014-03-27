<?php

namespace Tpfilrouge\skillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TpfilrougeskillsBundle:Default:index.html.twig', array('name' => $name));
    }
}
