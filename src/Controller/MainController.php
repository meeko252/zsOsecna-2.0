<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MainController extends NameController
{
    /**
     * @Route("/", name="homePage")
     */
    public function showHomePage()
    {
        $basicNames = $this->getBaseNames();
        $basicNames["category"] = "main";
        return $this->render('homePage.html.twig', $basicNames);
    }
}