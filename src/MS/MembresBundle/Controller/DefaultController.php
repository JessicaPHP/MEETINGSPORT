<?php

namespace MS\MembresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MSMembresBundle:Default:index.html.twig');
    }
}
