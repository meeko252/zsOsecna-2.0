<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class PrimarySchoolController extends NameController
{
    /**
     * @Route("/zs", name="primarySchool_homePage")
     */
    public function showHomePage()
    {
        $baseNames = $this->getBaseNames();
        $baseNames['category'] = "zs";
        return $this->render('primarySchool/homePage.html.twig', $baseNames);
    }
}