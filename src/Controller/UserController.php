<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function new (Request $request, EntityManagerInterface $manager)
     {
        $user = new User();
        $form = $this->createForm( UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('app_user');
        }

        return $this->render('users/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

}

?>