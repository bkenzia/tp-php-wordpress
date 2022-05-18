<?php
namespace App\Controller\Front;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("products", name="list_product")
    */
    public function productList(ProductRepository $productRepository)
    {
        $products=$productRepository->findAll();
        
        return $this->render('front/products.html.twig', ['products'=>$products]);
    }

    /**
     * @Route("product/{id}", name="product_show")
    */
    public function productShow($id, ProductRepository $productRepository)
    {
        $product=$productRepository->find($id);
        
        return $this->render('front/product.html.twig',['product'=>$product]);
    }
}