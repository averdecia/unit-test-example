<?php
namespace AhorcadoGame;

class Ahorcado{

    private $maxTry;
    private $word;
    private $leftWords;

    public function __construct($word, $maxTry = 3)
    {
        $this->maxTry = $maxTry;
        $this->word = $word;
        $this->leftWords = $this->word;
    }

    public function ended(): bool {
        return $this->maxTry === 0 || strlen($this->leftWords) === 0;
    }

    public function addPlay($letter): void {
        if($this->ended()) { return ; }

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
        $result = [];
        $wordArray = str_split($this->word);
        for($i = 0; $i < count($wordArray); $i++){
            $result[] = strpos($this->leftWords, $wordArray[$i]) !== false ? "_" : $wordArray[$i];
        }
        return implode(" ", $result);
    }
}