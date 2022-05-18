<?php

namespace App\Controller;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    
    /**
     * @Route("/bdd/categories", name="categories_liste")
     */
    public function categoriesList(CategorieRepository $categoriesRepository)
    {
        $categories=$categoriesRepository->findAll();
        return $this->render('categorie/categories.html.twig', ['categories'=>$categories]);
    }

    /**
     * @Route("/bdd/categorie/{id}", name="categorie_show")
    */
    public function categorieShow($id, CategorieRepository $categoriesRepository)
    {
        $categorie=$categoriesRepository->find($id);
        return $this->render("categorie/categorie.html.twig", ['categorie'=>$categorie]);
    }
    
    /**
     * @Route("/bdd/create/categorie", name="categorie_create")
    */
    public function createCategorie(Request $request, EntityManagerInterface $entityManagerInterface){
        $categorie=new Categorie();
        $categorieForm=$this->createForm(CategorieType::class, $categorie);
        $categorieForm->handleRequest($request);
        if($categorieForm->isSubmitted() && $categorieForm->isValid()){
            $entityManagerInterface->persist($categorie);
            $entityManagerInterface->flush();
         return $this->redirectToRoute("categories_liste");
        }
        
     return $this->render('categorie/update_categorie.html.twig', ['categorieForm'=>$categorieForm->createView()]);
    }


    /**
     * @Route("bdd/update/categorie/{id}" , name="categorie_update")
    */

   public function articleUpdate($id,Request $request ,CategorieRepository $categorieRepository, EntityManagerInterface $entityManagerInterface)
   {
    $categorie=$categorieRepository->find($id);
    $categorieForm=$this->createForm(CategorieType::class, $categorie);
    $categorieForm->handleRequest($request);
    if($categorieForm->isSubmitted() && $categorieForm->isValid()){
        $entityManagerInterface->persist($categorie);
        $entityManagerInterface->flush();
        return $this->redirectToRoute("categories_liste");
    }
    return $this->render('categorie/update_categorie.html.twig', ['categorieForm'=>$categorieForm->createView()]);
   }


   /**
     * @Route("bdd/delete/categorie/{id}" , name="categorie_delete")
    */

    public function categorieDelete($id, CategorieRepository $categorieRepository , EntityManagerInterface $entityManagerInterface)
    {
        $categorie=$categorieRepository->find($id);
        $entityManagerInterface->remove($categorie);
        $entityManagerInterface->flush();
        return  $this->redirectToRoute("categories_liste");
    }
}
