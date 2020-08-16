<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Shop;

class DefaultController extends BaseController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
        return $this->renderTemplate('home/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
