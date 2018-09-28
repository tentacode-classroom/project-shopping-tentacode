<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cat;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $doctrine = $this->getDoctrine();
        $carRepository = $doctrine->getRepository(Cat::class);
        $cat = $carRepository->find($productId);

        $cat->incrementViewCounter();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($cat);
        $entityManager->flush();

        return $this->render('product/detail.html.twig', [
            'cat' => $cat,
        ]);
    }
}
