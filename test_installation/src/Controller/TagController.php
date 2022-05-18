<?php

namespace App\Controller;
use App\Entity\Tag;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/tag", name="tag")
     */
    public function index(): Response
    {
        return $this->render('tag/index.html.twig', [
            'controller_name' => 'TagController',
        ]);
    }

    /**
     * @Route("/bdd/tags", name="tag-liste")
    */     //autowire
    public function tagList(TagRepository $tagRepository )
    {
       $tags=$tagRepository->findAll();
    //    dd($articles);
       return $this->render('tag/tags.html.twig', ['tags'=>$tags]);
    }

    /**
     * @Route("/bdd/tag/{id}", name="tag_show")
    */
    public function tagShow($id, TagRepository $tagRepository)
    {
        $tag=$tagRepository->find($id);
        return $this->render("tag/tag.html.twig", ['tag'=>$tag]);
    }

}
