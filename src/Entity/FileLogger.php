<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Monolog\Logger;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoggerRepository")
 */
class FileLogger
{

    private $logger;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    function __construct()
    {
        $this->logger = new Logger("test");
    }




}
