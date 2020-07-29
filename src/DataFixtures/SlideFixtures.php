<?php

namespace App\DataFixtures;

use App\Entity\Slide;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SlideFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i<= 10; $i++){
            $slide = new Slide();

            $slide->setTitle("Titre de l'article n°$1")
                  ->setContent("Contenu de l'article n°$i")
                  ->setImage("https://place-hold.it/300x500");

            $manager->persist($slide);
        }

        $manager->flush();
    }
}
