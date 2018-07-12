<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('ms_membres_homepage', new Route('/', array(
    '_controller' => 'MSMembresBundle:Default:index',
)));

return $collection;
