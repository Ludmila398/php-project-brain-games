<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function divisor()
{
    $question = 'Find the greatest common divisor of given numbers.';
    
    function calculation($randNumber1, $randNumber2)
    {
        if ($randNumber1 > $randNumber2) {
           $temp =  $randNumber2;
        } else {
            $temp =  $randNumber1;
        }
        for ($i = $temp; $i >= 1; $i -= 1) {
            if (($randNumber1 % $i === 0) && ($randNumber2 % $i === 0)) {
                return $i;
            }
        }    
    }
    
    function mathQuest()
    {
    $mathQuest = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randNumber1 = rand(1, 101);
        $randNumber2 = rand(1, 101);
        $quest = "{$randNumber1} {$randNumber2}";
        $rightAnswer = (string)(calculation ($randNumber1, $randNumber2));

        $mathQuest[$i] = [$quest, $rightAnswer];
        
    }
    return $mathQuest;
    }
    $mathQuest1 = mathQuest();

    game($mathQuest1, $question);
}