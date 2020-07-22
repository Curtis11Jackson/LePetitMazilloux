<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MazillouxController extends AbstractController
{
    /**
     * @Route("/mazilloux", name="mazilloux")
     */
    public function index()
    {
        return $this->render('mazilloux/index.html.twig', [
            'controller_name' => 'MazillouxController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('mazilloux/home.html.twig');
    }

    /**
     * @Route("/mazilloux/chambreterrecuite", name="mazilloux_chambreterrecuite")
     */
    public function showTerreCuite()
    {
        return $this->render('mazilloux/chambreterrecuite.html.twig');
    }
    
    /**
     * @Route("/mazilloux/chambreporcelaine", name="mazilloux_chambreporcelaine")
     */
    public function showPorcelaine()
    {
        return $this->render('mazilloux/chambreporcelaine.html.twig');
    }

    /**
     * @Route("/mazilloux/tabledhote", name="mazilloux_tabledhote")
     */
    public function showTabledhote()
    {
        return $this->render('mazilloux/tabledhote.html.twig');
    }

}
