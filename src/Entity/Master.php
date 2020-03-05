<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Master
{

    /**
     * @var transform
     */
    private $transformation;


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
//transformation with transform parameter
    /**
     * Master constructor.
     * @param transform $transformation
     */
    public function __construct(transform $transformation)
    {
        $this->transformation = $transformation;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function stringThing(String $input) {
        return $this->transformation->stringMagic($input);
    }



}