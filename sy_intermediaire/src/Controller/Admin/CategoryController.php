<?php
namespace App\Controller\Admin;
use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class CategoryController extends AbstractController
{
    /**
     * @Route("admin/categories", name="admin_list_category")
    */
    public function adminCategory(CategoryRepository $categoryRepository)
    {
        $categorys=$categoryRepository->findAll();
        return $this->render('admin/categorys.html.twig', ['categorys'=>$categorys]);
    }

    /**
     * @Route("/admin/categorie/{id}", name="admin_category_show")
    */
    public function showCategory($id,CategoryRepository $categoryRepository)
    {
        $category=$categoryRepository->find($id);
        return $this->render('admin/category.html.twig', ['category'=>$category]);
    }

    /**
     * @Route("/admin/create/category" , name="admin_create_category")
    */
    public function createCategory(EntityManagerInterface $entityManagerInterface, Request $request)
    {
        $category=new Category();
        $categoryForm=$this->createForm(CategoryType::class, $category);
        $categoryForm->handleRequest($request);
        if($categoryForm->isSubmitted() && $categoryForm->isValid()){
            $entityManagerInterface->persist($category);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('admin_list_category');
        }
        return $this->render('admin/category_add.html.twig', ['categoryForm'=>$categoryForm->createView()]);
    }

    /**
     * @Route("admin/update/category/{id}" , name="admin_category_update")
    */
    public function categoryUpdate($id, CategoryRepository $categoryRepository, EntityManagerInterface $entityManagerInterface, Request $request)
    {
        $category=$categoryRepository->find($id);
        $categoryForm=$this->createForm(CategoryType::class, $category);
        $categoryForm->handleRequest($request);
        if($categoryForm->isSubmitted() && $categoryForm->isValid()){
            $entityManagerInterface->persist($category);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('admin_list_category');
        }
        return $this->render('admin/category_update.html.twig', ['categoryForm'=>$categoryForm->createView()]);

    }

    /**
     * @Route("admin/delete/category/{id}" , name="admin_category_delete")
    */
    public function categoryDelete($id, CategoryRepository $categoryRepository, EntityManagerInterface $entityManagerInterface)
    {
        $category=$categoryRepository->find($id);
       $entityManagerInterface->remove($category);
       $entityManagerInterface->flush();
       $this->addFlash('notice', 'votre produit a été suprimé');
       return $this->redirectToRoute('admin_list_category') ;
    }
}