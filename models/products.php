<?php
class Product
{
    public $name;
    public $animal;
    public $price;
    public $image;

    public function __construct($name, $animal, $price, $image)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->price = $price;
        $this->image = $image;
    }
}
