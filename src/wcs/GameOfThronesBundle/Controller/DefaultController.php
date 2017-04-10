<?php

namespace wcs\GameOfThronesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//
use  wcs\GameOfThronesBundle\Entity\Personnage;
use  wcs\GameOfThronesBundle\Entity\Royaume;
//


class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('wcsGameOfThronesBundle:Default:index.html.twig');

        $em = $this->getDoctrine()->getManager();
		//Creation royaume pour eviter problemes

		$royaume = new Royaume();
		$royaume->setNom("Winterfell");
		$royaume->setCapitale("Floconville");
		$royaume->setNbHabitant(50000);
		$em->persist($royaume);

       	$personnage = new Personnage();
        $personnage->setNom('Ned');
        $personnage->setPrenom('Stark');
        $personnage->setSexe('homme');
        $personnage->setBio('Blond au yeux bleu a la chaussure noire');
        $personnage->setRoyaume($royaume);
        $em->persist($personnage);

		$personnage = new Personnage();
        $personnage->setNom('Robb');
        $personnage->setPrenom('Stark');
        $personnage->setSexe('homme');
        $personnage->setBio('Brun  au yeux indetermine et pieds en chaussettes');
        $personnage->setRoyaume($royaume);
        $em->persist($personnage);
		//*********************************************************************
		$royaume = new Royaume();
		$royaume->setNom("FortReal");
		$royaume->setCapitale("Realville");
		$royaume->setNbHabitant(500000);
		$em->persist($royaume);

       	$personnage = new Personnage();
        $personnage->setNom('Sansa');
        $personnage->setPrenom('Stark');
        $personnage->setSexe('femme');
        $personnage->setBio('fille aux nombreux problemes');
        $personnage->setRoyaume($royaume);
        $em->persist($personnage);
		//*********************************************************************
		$royaume = new Royaume();
		$royaume->setNom("Hautjardin");
		$royaume->setCapitale("Verger");
		$royaume->setNbHabitant(10000);
		$em->persist($royaume);

		$personnage = new Personnage();
        $personnage->setNom('Limier');
        $personnage->setPrenom('Le');
        $personnage->setSexe('homme');
        $personnage->setBio('Geant a eviter');
        $personnage->setRoyaume($royaume);
        $em->persist($personnage);
		//*********************************************************************

		$em->flush();


		return $this->render('wcsGameOfThronesBundle:Default:index.html.twig');
    }
}
