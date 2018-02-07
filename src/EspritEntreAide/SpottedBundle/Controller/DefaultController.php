<?php

namespace EspritEntreAide\SpottedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpottedBundle:Default:index.html.twig');
    }
}
