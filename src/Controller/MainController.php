<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{

    #[Route('/', name: 'app_main')]
    public function test () {

        return $this->render('main.html.twig',);
    }

    #[Route('/nous-contacter', name: 'app_contact')]
    public function contact () {

        return $this->render('contact.html.twig');
    }

}

?>