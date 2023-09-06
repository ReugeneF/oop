<?php
declare(strict_types=1);

require_once 'games.php';

$game1 = new Game("Call of Duty","FPS Shooter",65,"Action");
$game2 = new Game("Fifa 2023", "Soccer game", 50, "Sport");
$game3 = new Game("Wii sport", "Sport", 20,"Sport");
echo $game1->showGame();
echo $game2->showGame();
echo $game3->showGame();

var_dump($game1);
