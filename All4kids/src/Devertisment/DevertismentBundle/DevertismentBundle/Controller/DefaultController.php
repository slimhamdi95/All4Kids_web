<?php

namespace DevertismentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevertismentBundle:Default:index.html.twig');
    }
}
