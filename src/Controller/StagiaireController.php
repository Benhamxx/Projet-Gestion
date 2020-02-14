<?php

namespace App\Controller;

use App\Entity\Stagiaire;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StagiaireController extends AbstractController
{
    /**
     * @Route("/stagiaire", name="stagiaire")
     */
    public function index()
    {   
        $stagiaires = $this->getDoctrine()
                        ->getRepository(Stagiaire::class)
                        ->getAll();

        return $this->render('stagiaire/index.html.twig', [
            'stagiaires' => $stagiaires,
        ]);
    }

    /**
     * @Route("/stagiaire/{id}", name="fiche_stagiaire")
     */
    public function fiche(Stagiaire $stagiaire){
        return $this->render('stagiaire/fiche.html.twig', [
            'stagiaire' => $stagiaire,
        ]);
    }
}
