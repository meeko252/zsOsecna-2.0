<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Essentials\MainNames;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homePage")
     */
    public function showHomePage()
    {
        return $this->render('homePage.html.twig', [
            'officialName' => MainNames::OFFICIAL_NAME,
            'fullName' => MainNames::FULL_NAME,
            'primarySchool' => MainNames::PRIMARY_SCHOOL,
            'kinderGarden' => MainNames::KINDER_GARDEN,
            'schoolClub' => MainNames::SCHOOL_CLUB,
            'rentals' => MainNames::RENTALS,
            'skolaOnline' => MainNames::SKOLA_ONLINE,
            'naseMs' => MainNames::NASE_MS
        ]);
    }
}