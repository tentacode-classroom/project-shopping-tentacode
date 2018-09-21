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
        return $this->render('product/detail.html.twig', [
            'product_id' => $productId,
        ]);
    }
}
