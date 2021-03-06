<?php

class Ahorcado{

    private $maxTry;
    private $word;
    private $leftWords;

    private function __construct($word, $maxTry = 3)
    {
        $this->maxTry = $maxTry;
        $this->word = $word;
        $this->leftWords = $this->word;
    }

    public function ended(): bool {
        return $this->maxTry === 0 || strlen($this->leftWords) === 0;
    }

    public function addPlay($letter): void {
        if($this->ended()) return;

        $startlen = strlen($this->leftWords);
        $newWords = str_replace($letter, "", $this->leftWords);

        if( $startlen ===  strlen($newWords)){
            // No changes
            $this->maxTry -= 1;
        } else {
            $this->leftWords = $newWords;
        }
    }

    public function win(){
        return $this->maxTry !== 0 || strlen($this->leftWords) === 0;
    }

    public function show(){
        array_map($this->word, function(){

        })
        return
    }
}