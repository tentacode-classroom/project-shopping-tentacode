<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CatRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $catRepository = new CatRepository();

        $cat = $catRepository->findOneById($productId);

        return $this->render('product/detail.html.twig', [
            'cat' => $cat,
        ]);
    }
}
