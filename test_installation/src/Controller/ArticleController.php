<?php

namespace App\Controller;
use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    /**
     * @Route("/bdd/articles", name="article-liste")
    */     //autowire
    public function articleList(ArticleRepository $articleRepository )
    {
       $articles=$articleRepository->findAll();
    //    dd($articles);
       return $this->render('article/articles.html.twig', ['articles'=>$articles]);
    }

    /**
     * @Route("/bdd/article/{id}", name="article_show")
    */
    public function articleShow($id, ArticleRepository $articleRepository)
    {
        $article=$articleRepository->find($id);
        return $this->render("article/article.html.twig", ['article'=>$article]);
    }

    /**
     * @Route("bdd/update/article/{id}" , name="article_update")
    */

   public function articleUpdate($id,Request $request ,ArticleRepository $articleRepository, EntityManagerInterface $entityManagerInterface)
   {
    $article=$articleRepository->find($id);
    $articleForm=$this->createForm(ArticleType::class, $article);
    $articleForm->handleRequest($request);
    if($articleForm->isSubmitted() && $articleForm->isValid()){
        $entityManagerInterface->persist($article);
        $entityManagerInterface->flush();
        return $this->redirectToRoute("article-liste");
    }
    return $this->render('article/update_article.html.twig', ['articleForm'=>$articleForm->createView()]);
   }

   /**
     * @Route("bdd/create/article" , name="article_create")
    */

    public function articleCreate(Request $request , EntityManagerInterface $entityManagerInterface)
    {
     $article=new Article();
     $articleForm=$this->createForm(ArticleType::class, $article);
     $articleForm->handleRequest($request);
     if($articleForm->isSubmitted() && $articleForm->isValid()){
         $entityManagerInterface->persist($article);
         $entityManagerInterface->flush();
         return $this->redirectToRoute("article-liste");
     }
     return $this->render('article/update_article.html.twig', ['articleForm'=>$articleForm->createView()]);
    }



    /**
     * @Route("bdd/delete/article/{id}" , name="article_delete")
    */

    public function articleDelete($id, ArticleRepository $articleRepository , EntityManagerInterface $entityManagerInterface)
    {
        $article=$articleRepository->find($id);
        $entityManagerInterface->remove($article);
        $entityManagerInterface->flush();
        return  $this->redirectToRoute("article-liste");
    }

    /**
     * @Route("/admin/test", name="admin_test")
    */
    public function adminTest()
    {
        dd('Test');
    }
}
