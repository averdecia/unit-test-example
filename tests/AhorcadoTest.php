<?php

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase{

    public function testAhorcadoShow(): void{
        $game = new Ahorcado("casas", 3);
        // $this->asserEqual( , $game->show());
        $game->addPlay("c");
        $this->assertFalse($game->ended());
    }
        
    public function testAhorcadoEndedTrue(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("c");
        $this->assertFalse($game->ended());
        $game->addPlay("a");
        $this->assertFalse($game->ended());
        $game->addPlay("s");
        $this->assertTrue($game->ended());
    }

    public function testAhorcadoEndedFalse(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("b");
        $this->assertFalse($game->ended());
        $game->addPlay("f");
        $this->assertFalse($game->ended());
        $game->addPlay("c");
        $this->assertTrue($game->ended());
    }

    public function testAhorcadoWin(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("c");
        $game->addPlay("a");
        $game->addPlay("s");
        $this->assertTrue($game->win());
    }
}
