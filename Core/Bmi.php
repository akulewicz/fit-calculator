<?php

class BMI
{
    private $weight;
    private $height;
    private $bmi;

    public function __construct(int $weight, int $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function calculate():float
    {
        $this->bmi = $this->weight / ($this->height*$this->height/10000);
        return $this->bmi;
    }
}