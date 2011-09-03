<?php

namespace FoM\MinecraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MinecraftBundle:Default:index.html.twig', array('name' => $name));
    }
}
