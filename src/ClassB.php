<?php

namespace App\Condorcy;

class ClassB
{
    const C = 100;

    /**
     * @var float $nb Un nombre dony j'ai besoindans mon app
     */
    private float $nb;


    public function __construct(float $x): void
    {
        $this->nb = $x;
    }
    /**
     * Une fonction qui calcule le carré d'un nombre
     *
     * @param int $x Un nombre
     *
     * @return float
     */
    public function f(int $x): float
    {
        $this->nb = $x ** 2;
    
        return $this->nb;
    }

    public function getNb(): float
    {
        return $this->nb;
    }
    
}
