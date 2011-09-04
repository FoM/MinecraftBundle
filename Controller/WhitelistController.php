<?php

namespace FoM\MinecraftBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WhitelistController extends Controller
{
    /**
     * Lists all players in the whitelist
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function indexAction()
    {
        // Fetching the player names from the whitelist file
        $players = array();
        // TODO

        return $this->render('MinecraftBundle:Whitelist:index.html.twig', array('players' => $players));
    }

    /**
     * Adds a player name to the whitelist
     * @param $playerName
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function addAction($playerName)
    {
        // TODO : add the player to the end of the file

        return $this->render('MinecraftBundle:Whitelist:add.html.twig', array('playerName' => $playerName));
    }
}
