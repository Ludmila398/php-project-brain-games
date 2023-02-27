<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function progression()
{
    $question = 'What number is missing in the progression?';
    
    function calculation($progrStep, $progrStart)
    {
        $progr = [];
        $temp = $progrStart;
        for ($i = 0; $i < 10; $i += 1) {
            $progr[] = $temp;
            $temp += $progrStep;
        }    
        return $progr;
    }
    
    function mathQuest()
    {
    $mathQuest = [];
    for ($i = 0; $i < 3; $i += 1) {
        $progrStep = rand(2, 7);
        $progrStart = rand(2, 15);
        $progrArray = calculation ($progrStep, $progrStart);
        $hiddenNumber = rand(0, 9);
        $rightAnswer = $progrArray[$hiddenNumber];
        $progrArray[$hiddenNumber] = '..';
        $quest = implode(' ', $progrArray);
        $mathQuest[$i] = ['', '', '', $rightAnswer, $quest];
        
    }
    return $mathQuest;
    }
    $mathQuest1 = mathQuest();

    game($mathQuest1, $question);
}