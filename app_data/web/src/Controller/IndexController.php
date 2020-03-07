<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getRepository(\App\Entity\Lamps::class)->findAll();



        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
