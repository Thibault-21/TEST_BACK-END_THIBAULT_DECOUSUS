<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $user = $this->getUser();
        // $token = $this->getUser();
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $user, 
            // 'token' => $token,
        ]);
    }
}
