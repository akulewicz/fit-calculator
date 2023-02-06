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
        $this->bmi = round($this->weight / ($this->height*$this->height/10000), 1);
        return $this->bmi;
    }

    private function setDefinition(string $text, string $color): array
    {
        return [
            'text' => $text,
            'color' => $color
        ];
    }

    public function getDefinition(): array 
    {
        if ($this->bmi < 16) {
            $result = $this->setDefinition('wygłodzenie', 'red');
        } elseif ($this->bmi < 17) {
            $result = $this->setDefinition('wychudzenie', 'red');
        } elseif ($this->bmi <= 18.5) {
            $result = $this->setDefinition('niedowagę', 'orange');
        } elseif ($this->bmi <= 24.9) {
            $result = $this->setDefinition('wagę prawidłową', 'green');
        } elseif ($this->bmi <= 29.9) {
            $result = $this->setDefinition('nadwagę', 'orange');
        } elseif ($this->bmi <= 34.9) {
            $result = $this->setDefinition('otyłość I stopnia', 'red');
        } elseif ($this->bmi <= 39.9) {
            $result = $this->setDefinition('otyłość kliniczną', 'red');
        } else {
            $result = $this->setDefinition('otyłość skrajną', 'red');
        };

        return $result;
    }
}