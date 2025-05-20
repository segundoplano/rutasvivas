<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController{
    #[Route('/principal', name: 'app_principal')]
    public function principal(): Response
    {
        return $this->render('user/index.html.twig');
    }



    
}
