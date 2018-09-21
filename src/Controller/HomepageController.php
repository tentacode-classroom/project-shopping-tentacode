<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Chat 1',
            ],
            [
                'id' => 2,
                'name' => 'Chat 2',
            ],
            [
                'id' => 3,
                'name' => 'Chat 3',
            ],
        ];

        return $this->render('homepage.html.twig', [
            'products' => $products,
        ]);
    }
}
