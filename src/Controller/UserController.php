<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController{

    #[Route('/user', name: 'app_user')]
    public function index (EntityManagerInterface $entityManager)
     {
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }

    #[Route('/user/new', name: 'app_user_new')]
    public function new ()
     {
        return $this->render('users/new.html.twig');
    }

}

?>