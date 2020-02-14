<?php

namespace App\Controller;

use App\Entity\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SessionController extends AbstractController
{

    /**
     * @Route("/session", name="session")
     */
    public function index()
    {
        $sessions = $this->getDoctrine()
                ->getRepository(Session::class)
                ->getAll();

        return $this->render('session/index.html.twig', [
            'sessions' => $sessions,
        ]);
    }
    /**
     * @Route("/session/{id}", name="session_info", methods="GET")
     */
    public function info(Session $session): Response {
        return $this->render('session/info.html.twig', ['session'=> $session]);
    }
}
