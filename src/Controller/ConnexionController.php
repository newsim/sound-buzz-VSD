<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion", methods={"GET","HEAD"}, name="connexion")
     */

    //ajout d'une page classique
    public function getConnexion()
    {
        return $this->render('connexion.html.twig');
    }


}