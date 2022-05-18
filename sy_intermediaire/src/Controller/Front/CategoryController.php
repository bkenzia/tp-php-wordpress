<?php
nameSpace App\Controller\Front;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("categorys", name="list_category")
    */
    public function ctegoryList(CategoryRepository $categoryRepository)
    {
        $categorys=$categoryRepository->findAll();
        return $this->render('front/categorys.html.twig', ['categorys'=>$categorys]);
    }

    /**
     * @Route("category/{id}", name="category_show")
    */
    public function categoryShow($id, CategoryRepository $categoryRepository)
    {
        $category=$categoryRepository->find($id);
        return $this->render('front/category.html.twig', ['category'=>$category]);
    }
}