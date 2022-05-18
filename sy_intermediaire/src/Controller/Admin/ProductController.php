<?php
namespace App\Controller\Admin;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{
    /**
     * @Route("/admin/products/" , name="admin_list_product")
    */
    public function adminProduct(ProductRepository $productRepository)
    {
        $products=$productRepository->findAll();
        return $this->render('admin/products.html.twig', ['products'=>$products]);
    }

    /**
     * @Route("/admin/product/{id}", name="admin_product_show")
    */
    public function showProduct($id,ProductRepository $productRepository)
    {
        $product=$productRepository->find($id);
        return $this->render('admin/product.html.twig', ['product'=>$product]);
    }

    //fonction qui créer un nouveau produit
    /**
     * @Route("/admin/create/product" , name="admin_create_product")
    */
    public function createProduct( EntityManagerInterface $entityManagerInterface, Request $request  )
    {
        $product=new Product();
        $productForm=$this->createForm(ProductType::class, $product);
        $productForm->handleRequest($request);
        if($productForm->isSubmitted() && $productForm->isValid()){
            $entityManagerInterface->persist($product);
            $entityManagerInterface->flush();
            // return $this->redirectToRoute('admin_product_show',['id' => $product->getId()]);
            return $this->redirectToRoute('admin_list_product');
        }
        
        return $this->render('admin/product_add.html.twig', ['productForm'=>$productForm->createView()]);

    }

    /**
     * @Route("admin/update/product/{id}" , name="admin_product_update")
    */
    public function productUpdate($id, ProductRepository $productRepository, EntityManagerInterface $entityManagerInterface, Request $request)
    {
        $product=$productRepository->find($id);
        $productForm=$this->createForm(ProductType::class, $product);
        $productForm->handleRequest($request);
        if($productForm->isSubmitted() && $productForm->isValid()){
            $entityManagerInterface->persist($product);
            $entityManagerInterface->flush();
            $this->addFlash('notice', 'votre produit a été modifier');
            // return $this->redirectToRoute('admin_product_show',['id' => $product->getId()]);
            return $this->redirectToRoute('admin_list_product');
        }
        return $this->render('admin/product_update.html.twig', ['productForm'=>$productForm->createView()]);
    }

    /**
     * @Route("admin/delete/product/{id}" , name="admin_product_delete")
    */
    public function productDelete($id, EntityManagerInterface $entityManagerInterface, ProductRepository $productRepository )
    {
       $product=$productRepository->find($id);
       $entityManagerInterface->remove($product);
       $entityManagerInterface->flush();
       $this->addFlash('notice', 'votre produit a été suprimé');
       return $this->redirectToRoute('admin_list_product') ;
    }
}
