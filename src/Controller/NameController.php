<?php


namespace App\Controller;


use App\Essentials\MainNames;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NameController extends AbstractController
{
    public $baseNames =
        [
            'officialName' => MainNames::OFFICIAL_NAME,
            'fullName' => MainNames::FULL_NAME,
            'primarySchool' => MainNames::PRIMARY_SCHOOL,
            'kinderGarden' => MainNames::KINDER_GARDEN,
            'schoolClub' => MainNames::SCHOOL_CLUB,
            'rentals' => MainNames::RENTALS,
            'skolaOnline' => MainNames::SKOLA_ONLINE,
            'naseMs' => MainNames::NASE_MS
        ];

    public function getBaseNames()
    {
        return $this->baseNames;
    }
}