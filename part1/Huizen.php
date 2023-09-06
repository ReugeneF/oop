<?php

class Huizen
{
   public function __construct(public $name, public $floor, public $rooms, public $width = 1, public $height = 1,public $depth = 1)
   {
   }
   public function setVolume(){
       return($this->volume = $this->width * $this->height * $this->depth);
   }

   public function getHuis(){
       return "Het ". $this->name . " huis heeft ". $this->floor . " Verdiepingen, " . $this->rooms . " kamers en heeft een volume van " . $this->setVolume() . "m3";
   }

   public function getPrice(){
       return"De prijs van dit huis is: &euro;" . $this->price = $this->setVolume() * 1500;
   }
}

$h1 = new Huizen("eerste", 2,4,10,10,1);
echo $h1->getHuis() . "<br>" . $h1->getPrice(). "<br> <br> ";

$h2 = new Huizen("tweede",4, 20, 20, 35, 12 );
echo $h2->getHuis() . "<br>" . $h2->getPrice();