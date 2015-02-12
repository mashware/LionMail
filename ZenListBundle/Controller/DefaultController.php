<?php

namespace ZenMail\ZenListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZenListBundle:Default:index.html.twig', array('name' => $name));
    }
}
