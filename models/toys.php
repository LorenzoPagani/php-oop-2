<?php

class Toys extends Product
{
    public $category;
    public $ageGroup;

    public function __construct($name, $animal, $price, $image, $category, $ageGroup)
    {
        parent::__construct($name, $animal, $price, $image);

        $this->category = $category;
        $this->ageGroup = $ageGroup;
    }
}
