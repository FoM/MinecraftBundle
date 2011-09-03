<?php

namespace FoM\MinecraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MinecraftBundle:Whitelist:index.html.twig', array('name' => ''));
    }
}
