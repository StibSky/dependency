<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\transform;
//class to dash

/**
 * @ORM\Entity(repositoryClass="App\Repository\DashSpacesRepository")
 */
class DashSpaces implements transform
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

    public function stringMagic(String $input)
    {
        $input = str_replace(' ', '-',($input));

        return $input;
    }
}