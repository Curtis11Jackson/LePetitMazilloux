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
 * @Route("/mazilloux/chambresremastered", name="mazilloux_chambresremastered")
 */
    public function showRemasteredRoomsPege()
    {
        return $this->render('mazilloux/chambresremasteredpage.html.twig');
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
     * @Route("/mazilloux/appartement", name="mazilloux_appartement")
     */
    public function showAppartement()
    {
        return $this->render('mazilloux/appartement.html.twig');
    }

        /**
     * @Route("/mazilloux/appartementremastered", name="mazilloux_appartementremastered")
     */
    public function showAppartementremastered()
    {
        return $this->render('mazilloux/appartementremastered.html.twig');
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
     * @Route("/mazilloux/impressionsurtextile", name="mazilloux_impressionsurtextile")
     */
    public function showPageHistoireImpressionsurtextiles()
    {
        return $this->render('mazilloux/impressionsurtextile.html.twig');
    }

    /**
     * @Route("/mazilloux/feutrage", name="mazilloux_feutrage")
     */
    public function showHistoireFeutrage()
    {
        return $this->render('mazilloux/feutrage.html.twig');
    }

    /**
     * @Route("/mazilloux/region", name="mazilloux_region")
     */
    public function showRegion()
    {
        return $this->render('mazilloux/region.html.twig');
    }

    /**
     * @Route("/mazilloux/galleriephotos", name="mazilloux_gallerie")
     */
    public function showGallerie(SlideRepository $repo)
    {
        $repo = $this->getDoctrine()->getRepository(Slide::class);

        $slides = $repo->findAll();


        return $this->render('mazilloux/galleriephotos.html.twig', [
            'slides' => $slides
        ]);
    }

        /**
     * @Route("/mazilloux/contact", name="mazilloux_contact")
     */
    public function contact()
    {
        return $this->render('mazilloux/contact.html.twig');
    }

}
