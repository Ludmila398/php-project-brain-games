<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function prime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    
    function calculation($randNumber)
    {
        $answer = '';
        if ($randNumber === 2) {
            $answer = 'yes';
        }
        for ($i = 2; $i < $randNumber; $i += 1) {
                if ($randNumber % $i === 0) {
                    $answer = 'no';
                    break; 
                } else {
                    $answer = 'yes';
                }        
        }
        return $answer;
    }
    
    function mathQuest()
    {
    $mathQuest = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randNumber = rand(2, 40);
        $rightAnswer = calculation($randNumber);
        $mathQuest[$i] = [$randNumber, $rightAnswer];
        
    }
    return $mathQuest;
    }
    $mathQuest1 = mathQuest();

    game($mathQuest1, $question);
}