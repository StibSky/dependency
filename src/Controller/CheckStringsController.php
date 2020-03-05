<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\DashSpaces;
use App\Entity\EmptyString;
use App\Entity\Master;
use Monolog\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Monolog\Handler\StreamHandler;


class CheckStringsController extends AbstractController
{
    /**
     * @Route("/strings", name="check_strings")
     */
    public function index()
    {
        //checks if dropdown is not set, if not calls the empty function
        if (!isset($_POST['select'])) {
            $master = new Master(new EmptyString());
        } elseif ($_POST['select'] == "capitals") {
            $master = new Master(new Capitalize());
        } elseif ($_POST['select'] == "dashes") {
            $master = new Master(new DashSpaces());
        }
        //creates the logger with Streamhandler and pushes into log.info
        $logger = new Logger('my_logger');
        $logger->pushHandler(new StreamHandler(__DIR__ . '/logs/log.info', Logger::INFO));
        $logger->info($master->stringThing($_POST['word'] ?? ""));
        //shows the page, uses the stringThing function from whatever gets selected
        return $this->render('check_strings/index.html.twig', [
            'controller_name' => 'CheckStringsController',
            'inputString' => $master->stringThing($_POST['word'] ?? ""),
        ]);

    }

}
