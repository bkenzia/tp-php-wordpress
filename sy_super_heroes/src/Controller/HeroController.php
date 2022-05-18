<?php

namespace App\Controller;
use App\Entity\Hero;
use App\Form\HeroType;
use App\Repository\HeroRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    /**
     * @Route("/hero", name="hero")
     */
    public function index(): Response
    {
        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
        ]);
    }

    /**
     * @Route("/bdd/heros", name="heros-liste")
    */     //autowire
    public function heroList(HeroRepository $heroRepository)
    {
        $heros=$heroRepository->findAll();
        
        return $this->render('hero/heros.html.twig', ['heros'=>$heros]);
    }

    /**
     * @Route("/bdd/hero/{id}", name="hero_show")
    */
    public function heroShow($id, HeroRepository $heroRepository)
    {
        $hero=$heroRepository->find($id);
        
        return $this->render('hero/hero.html.twig',['hero'=>$hero]);
    }

    /**
     * @Route("bdd/update/hero/{id}" , name="hero_update")
    */
    public function heroUpdate($id,HeroRepository $heroRepository, Request $request, EntityManagerInterface $entityManagerInterface)
    {
        $hero=$heroRepository->find($id);
        $heroForm=$this->createForm(HeroType::class,$hero);
        $heroForm->handleRequest($request);
        if($heroForm->isSubmitted() && $heroForm->isValid()){
            $entityManagerInterface->persist($hero);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('heros-liste');
        }
        return $this->render('hero/update_hero.html.twig', ['heroForm'=>$heroForm->createView() ]);
    }

    /**
     * @Route("bdd/create/hero" , name="hero_create")
    */
    public function heroCreate(Request $request, EntityManagerInterface $entityManagerInterface)
    {
        $hero=new Hero();
        $heroForm=$this->createForm(HeroType::class,$hero);
        $heroForm->handleRequest($request);
        if($heroForm->isSubmitted() && $heroForm->isValid()){
            $entityManagerInterface->persist($hero);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('heros-liste');
        }
        return $this->render('hero/update_hero.html.twig', ['heroForm'=>$heroForm->createView() ]);
    }

    /**
     * @Route("bdd/delete/hero/{id}" , name="hero_delete")
    */
    public function heroDelete($id,EntityManagerInterface $entityManagerInterface, HeroRepository $heroRepository)
    {
        $hero=$heroRepository->find($id);
        $entityManagerInterface->remove($hero);
        $entityManagerInterface->flush();
        return $this->redirectToRoute('heros-liste');
    }
}
