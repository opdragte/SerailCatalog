<?php

namespace WOTW\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WOTWAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
