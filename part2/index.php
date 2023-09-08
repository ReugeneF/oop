<?php
declare(strict_types=1);

require_once 'games.php';
$games = [
    new Game("Call of Duty","FPS Shooter",65,"Action"),

    new Game("Fifa 2023", "Soccer game", 50, "Sport"),

    new Game("Wii sport", "Sport", 20,"Sport")

];

foreach ($games as $game) {
    echo $game->showGame() . "\n";
}
