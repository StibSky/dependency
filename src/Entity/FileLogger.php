<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$logger = new Logger('my_logger');
$logger->pushHandler(new StreamHandler(__DIR__ . '/logs/info.log', Logger::DEBUG));
/**
 * @ORM\Entity(repositoryClass="App\Repository\LoggerRepository")
 */
class FileLogger
{
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
}
