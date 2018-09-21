<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $product = new Product();
        $product->id = $productId;
        $product->name = 'Toto';

        $fruits = [
            'banane',
            'pomme',
            'fraise',
        ];

        return $this->render('product/detail.html.twig', [
            'product' => $product,
            'fruits' => $fruits
        ]);
    }
}

class Product
{
    public $id;
    public $name;

    public function upperName()
    {
        return strtoupper($this->name);
    }
}
