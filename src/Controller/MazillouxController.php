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

    /**
     * @Route("/mazilloux/stageceramiques", name="mazilloux_stageceramiques")
     */
    public function showPageStageCeramiques()
    {
        return $this->render('mazilloux/stageceramiques.html.twig');
    }

    /**
     * @Route("/mazilloux/stagetextiles", name="mazilloux_stagetextiles")
     */
    public function showPageStageTextiles()
    {
        return $this->render('mazilloux/stagetextiles.html.twig');
    }

    /**
     * @Route("/mazilloux/pitfiring", name="mazilloux_pitfiring")
     */
    public function showPageHistoirePitfiring()
    {
        return $this->render('mazilloux/pitfiring.html.twig');
    }

    /**
     * @Route("/mazilloux/raku", name="mazilloux_raku")
     */
    public function showPageHistoireRaku()
    {
        return $this->render('mazilloux/raku.html.twig');
    }

    /**
     * @Route("/mazilloux/tourdepoterie", name="mazilloux_tourdepoterie")
     */
    public function showPageHistoireTourdepoterie()
    {
        return $this->render('mazilloux/tourdepoterie.html.twig');
    }

    /**
     * @Route("/mazilloux/decorationceramique", name="mazilloux_decorationceramique")
     */
    public function showPageHistoireDecorationCeramique()
    {
        return $this->render('mazilloux/decorationceramique.html.twig');
    }

    /**
     * @Route("/mazilloux/peinturesursoie", name="mazilloux_peinturesursoie")
     */
    public function showPageHistoirePeinturesoie()
    {
        return $this->render('mazilloux/peinturesursoie.html.twig');
    }

    /**
     * @Route("/mazilloux/impressionsurtextiles", name="mazilloux_impressionsurtextiles")
     */
    public function showPageHistoireImpressionsurtextiles()
    {
        return $this->render('mazilloux/impressionsurtextiles.html.twig');
    }

    /**
     * @Route("/mazilloux/feutrage", name="mazilloux_feutrage")
     */
    public function showHistoireFeutrage()
    {
        return $this->render('mazilloux/feutrage.html.twig');
    }

}
