<?php
class Game
{
    /**
     * @param string $naam
     * @param string $beschrijving
     * @param float $prijs
     * @param string $tags
     */

    public function __construct(public $naam, public $beschrijving, public $prijs, public $tags)
    {
        $this->naam = ucfirst($naam);
    }

    public function showDeci()
    {
        return number_format($this->prijs, 2);
    }

    public function showGame()
    {
        return "Naam: " . $this->naam . " | Beschrijving: " . $this->beschrijving . " | Prijs: " . $this->showDeci() . " | Tags: " . $this->tags . "<br>";
    }
}



