<?php



namespace App\Entity;

//class that is empty if no value is set
class EmptyString implements transform
{

    public function stringMagic(string $input)
    {

    }
}