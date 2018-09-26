<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CatRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $catRepository = new CatRepository();

        $cats = $catRepository->findAll();

        return $this->render('homepage.html.twig', [
            'cats' => $cats,
        ]);
    }
}
