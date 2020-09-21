<?php

namespace App\Controller;

use App\Entity\Slide;
use App\Repository\SlideRepository;
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
     * @Route("/", name="mazilloux_home")
     */
    public function home()
    {
        return $this->render('mazilloux/home.html.twig');
    }

    /**
     * @Route("/mazilloux/cottage", name="mazilloux_cottage")
     */
    public function showCottage()
    {
        return $this->render('mazilloux/cottage.html.twig');
    }

    /**
     * @Route("/mazilloux/tabledhote", name="mazilloux_tabledhote")
     */
    public function showTabledhote()
    {
        return $this->render('mazilloux/tabledhote.html.twig');
    }

    /**
     * @Route("/mazilloux/appartements", name="mazilloux_appartements")
     */
    public function showAppartement()
    {
        return $this->render('mazilloux/appartements.html.twig');
    }

    /**
     * @Route("/mazilloux/stageceramique", name="mazilloux_stageceramique")
     */
    public function showPageStageCeramiques()
    {
        return $this->render('mazilloux/stageceramique.html.twig');
    }

    /**
     * @Route("/mazilloux/stagetextile", name="mazilloux_stagetextile")
     */
    public function showPageStageTextiles()
    {
        return $this->render('mazilloux/stagetextile.html.twig');
    }

    /**
     * @Route("/mazilloux/region", name="mazilloux_region")
     */
    public function showRegion()
    {
        return $this->render('mazilloux/region.html.twig');
    }


        /**
     * @Route("/mazilloux/contact", name="mazilloux_contact")
     */
    public function contact()
    {
        return $this->render('mazilloux/contact.html.twig');
    }

}
