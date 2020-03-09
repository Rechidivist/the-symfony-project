<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Cache(expires="3 days", public=true)
     */
    public function index()
    {

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
