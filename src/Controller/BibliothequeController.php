<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibliothequeController extends AbstractController
{
    /**
     * @Route("/bibliotheque", methods={"GET","HEAD"}, name="bibliotheque")
     */

    //ajout d'une page classique
    public function getBibliotheque()
    {
        return $this->render('biblio.html.twig');
    }


}