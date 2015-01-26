<?php

namespace Mash\LionMail\LionCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LionCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
