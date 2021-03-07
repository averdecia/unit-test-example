<?php
namespace AhorcadoGame\Tests;

use PHPUnit\Framework\TestCase;
use AhorcadoGame\Ahorcado;

final class AhorcadoTest extends TestCase{

    public function testAhorcadoShow(): void{
        $game = new Ahorcado("casas", 3);
        $this->assertEquals("_ _ _ _ _", $game->show());
        $game->addPlay("c");
        $this->assertEquals("c _ _ _ _", $game->show());
        $game->addPlay("f");
        $this->assertEquals("c _ _ _ _", $game->show());
        $game->addPlay("a");
        $this->assertEquals("c a _ a _", $game->show());
    }
        
    public function testAhorcadoEndedTrue(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("c");
        $this->assertFalse($game->ended());
        $game->addPlay("a");
        $this->assertFalse($game->ended());
        $game->addPlay("s");
        $this->assertTrue($game->ended());
        $this->assertTrue($game->win());
    }

    public function testAhorcadoEndedFalse(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("b");
        $this->assertFalse($game->ended());
        $game->addPlay("f");
        $this->assertFalse($game->ended());
        $game->addPlay("h");
        $this->assertTrue($game->ended());
        $this->assertFalse($game->win());
    }

    public function testAhorcadoWin(): void{
        $game = new Ahorcado("casas", 3);
        $game->addPlay("c");
        $game->addPlay("a");
        $game->addPlay("s");
        $this->assertTrue($game->win());
    }
}
