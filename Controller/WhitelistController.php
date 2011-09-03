<?php

namespace FoM\MinecraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        // Fetching the player names from the whitelist file
        $players = array();
        // TODO

        return $this->render('MinecraftBundle:Whitelist:index.html.twig', array('players' => $players));
    }
}
