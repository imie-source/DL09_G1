<?php

namespace Imie\CerberusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImieCerberusBundle:Default:index.html.twig', array('name' => $name));
    }
}
