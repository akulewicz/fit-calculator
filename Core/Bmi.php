<?php

namespace Core;

class BMI
{
    private $height;
    private $weight;
    private $bmi;

    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    public function calculate():float
    {
        $this->bmi = $this->weight / ($this->height*$this->height/10000);
        return $this->bmi;
    }
}