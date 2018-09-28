<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cat;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $doctrine = $this->getDoctrine();
        $catRepository = $doctrine->getRepository(Cat::class);
        $cats = $catRepository->findAllCatsHomepage();

        return $this->render('homepage.html.twig', [
            'cats' => $cats,
        ]);
    }
}
