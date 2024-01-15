<?php

class Food extends Product
{
    public $type;
    public $animalAge;
    public $flavour;

    public function __construct($name, $animal, $price, $image, $type, $animalAge, $flavour)
    {
        parent::__construct($name, $animal, $price, $image);

        $this->type = $type;
        $this->animalAge = $animalAge;
        $this->flavour = $flavour;
    }
}
