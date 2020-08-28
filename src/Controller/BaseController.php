<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", methods={"GET","HEAD"}, name="home")
     */

    //ajout d'une page classique
    public function getHome()
    {
        return $this->render('base.html.twig');
    }

    /**
    * @Route("/apropos/{subject}", methods={"GET","HEAD"}, name="about")
    */

    //permet de recuperer une variable URL
    public function getAPropos($subject)
    {
        return $this->render('apropos.html.twig', [
            'subject' => $subject
            ]);
    }
}