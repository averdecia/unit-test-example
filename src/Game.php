<?php 
namespace AhorcadoGame;

use AhorcadoGame\Ahorcado;

require __DIR__ . "/../vendor/autoload.php";

fwrite(STDOUT, "Bienvenido al Ahorcado! \n");
fwrite(STDOUT, "Inserte la palabra a jugar!\n");
$game = new Ahorcado(rtrim(fgets(STDIN)), 3);
fwrite(STDOUT,$game->show() . "\n");
while(true){
    $game->addPlay(rtrim(fgets(STDIN)));
    fwrite(STDOUT,$game->show() . "\n");
    if($game->ended()){ break; }
}
fwrite(STDOUT, $game->win() ? "You Win!" : "You Loose!");