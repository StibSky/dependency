<?php


namespace App\Entity;

//interface for both classes == polymorphism
interface transform {
    public function stringMagic(string $input);
}
