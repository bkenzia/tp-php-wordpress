<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
    
{
    private $tableau_article = [
        1=>[
            "titre"=>"vive la Bretagne",
            "contenu"=>"La Bretagne c'est maginifique",
            "id"=>1
        ],
    
        2=>[
            "titre"=>"vive la Normandie",
            "contenu"=>"La BNormandie c'est très beau",
            "id"=>2
        ],
        3=>[
            "titre"=>"vive la Guyane",
            "contenu"=>"La Guyane c'est fantastique",
            "id"=>2
        ],
    
    ];
    private $tableau_categorie = [
        1 => [
            "nom" => "Politique",
            "description" => "Tous savoir sur la politique",
            "id" => 1
        ],
        2 => [
            "nom" => "Economie",
            "description" => "Tous savoir sur l'économie",
            "id" => 2
        ],
        3 => [
            "nom" => "Technologie",
            "description" => "Tous savoir sur la technologie",
            "id" => 3
        ],
        4 => [
            "nom" => "Obi-wan Kenobi",
            "description" => "Tous savoir sur Obi-wan Kenobi",
            "id" => 4
        ]
    ];


    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    //wildcard
    /**
     * @Route("/home/{id}", name="home")
     */
    public function home($id)
    {
      $tableau_article = [
          1=>[
                "titre"=>"vive la Bretagne",
                "conrenu"=>"La Bretagne c'est maginifique",
                "id"=>1
            ],

            2=>[
                "titre"=>"vive la Normandie",
                "conrenu"=>"La BNormandie c'est très beau",
                "id"=>2
            ],
            3=>[
                "titre"=>"vive la Guyane",
                "conrenu"=>"La Guyane c'est fantastique",
                "id"=>2
            ],

        ];
        return new Response("Le tire de l'article est : ". $tableau_article[$id]['titre']);
    }

    // Exercice : créeez une route pour  afficher la page des mentions légales, 
    //le texte qui devra s'afficher sera :Mentions légales du site

    /**
     * @Route("/Mentions-legales", name="Mentions-legales")
    */

    public function Mentions_legales()
    {   
        return new Response("Mentions légales du site");
    }
    
    /**
     * @Route("/about", name="about")
    */

    public function about()
    {   
        return $this->render("about.html.twig");
    }

    // Exercice : créez une route welcome qui 
    //va afficher le fichier welcome.html.twig où il y aura un tire h1 bienvenue
     /**
     * @Route("/welcome", name="welcome")
    */

    public function welcome()
    {   
        return $this->render("welcome.html.twig");
    }

    //exercice créer une route poker avec un parametre age
    // si l'age est inférieur à 18 on va vers une page
    //qui affiche accés intérdit et si l'age est supérieur au égale à 18 on va vers une page
    //qui affiche accés autorisé

     /**
     * @Route("/poker/{age}", name="poker")
    */
    // public function poker($age)
    // {   
    //     if($age<18)
    //     {
    //         return $this->render("acces_interdit.html.twig");
    //     }
    //     return $this->render("acces_autorise.html.twig");
    // }


    public function poker($age)
    {   
        if($age>=18)
        {
            $acces=" Accés autoriser pour les adultes";
        }else{
            $acces="Accés non autoriser pour les mineures";
        }
        return $this->redirectToRoute('acees',[
            "acces"=>$acces
        ]);
        
    }

    /**
     * @Route("acees/{acces}", name="acees")
     */
    public function acces($acces)
    {
        return $this->render('acces.html.twig', [
            "acces"=>$acces
        ]);
    }
    
    /**
     * @Route("/article/{id}", name="article")
    */
    public function article($id)
    {
        $articles=$this->tableau_article;
        return $this->render('article.html.twig',['article'=>$articles[$id]]);
    }


    /**
     * @Route("/articles", name="articles")
    */
    public function articles()
    {
        $articles=$this->tableau_article;
        
        return $this->render('articles.html.twig', ['articles'=>$articles]);
    }


    /**
     * @Route("/categorie/{id}", name="categorie")
    */
    public function categorie($id)
    {
        $categories=$this->tableau_categorie;
        return $this->render('categorie.html.twig',['categorie'=>$categories[$id]]);
    }

     /**
     * @Route("/categories", name="categories")
    */
    public function categories()
    {
        $categories=$this->tableau_categorie;
        
        return $this->render('categories.html.twig', ['categories'=>$categories]);
    }

    //exercice créer un ficheir bases.html.twig qui aura
    //
} 
