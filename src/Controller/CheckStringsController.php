<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\DashSpaces;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CheckStringsController extends AbstractController
{
    /**
     * @Route("/strings", name="check_strings")
     */
    public function index()
    {
        $capitalize = new Capitalize();
        $dashSpace = new DashSpaces();
        return $this->render('check_strings/index.html.twig', [
            'controller_name' => 'CheckStringsController',
            'inputString' => $capitalize->stringMagic($_POST['word'] ?? ""),
            'inputDash' => $dashSpace->stringMagic($_POST['word'] ?? "")
        ]);

    }
}
