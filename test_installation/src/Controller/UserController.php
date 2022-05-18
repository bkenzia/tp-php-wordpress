<?php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;



class UserController extends AbstractController
{
    /**
     * @Route("/user/add" , name="user_add")
    */
    public function addUser(Request $request, EntityManagerInterface $entityManagerInterface, UserPasswordHasherInterface $userPasswordHasherInterface  )
    {
        $user=new User();
        $userForm=$this->createForm(UserType::class, $user);
        $userForm->handleRequest($request);
        if($userForm->isSubmitted()&& $userForm->isValid()){
            $user->setRoles(["ROLE_USER"]);
            $plainPassword=$userForm->get('password')->getData();
            $hashedPassword=$userPasswordHasherInterface->hashPassword($user,$plainPassword);
            $user->setPassword($hashedPassword);
            $entityManagerInterface->persist($user);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('article-liste');

        }
        return $this->render('main/useradd.html.twig', ['userForm'=>$userForm->createView()]);
    }
}