<?php
class Kennels extends Product
{
    public $size;
    public $material;
    public $weatherResistant;

    public function __construct($name, $animal, $price, $image, $size, $material, $weatherResistant)
    {
        parent::__construct($name, $animal, $price, $image);

        $this->size = $size;
        $this->material = $material;
        $this->weatherResistant = $weatherResistant;
    }
}
