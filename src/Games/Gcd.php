<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function Engine\play;

const NUMBER_OF_LOOPS = 3;
function findDivisor()
{
    $question = 'Find the greatest common divisor of given numbers.';

    function calculate(int $randNumber1, int $randNumber2)
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

    function getMathQuest()
    {
        $mathQuest = [];

        for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
            $randNumber1 = rand(1, 101);
            $randNumber2 = rand(1, 101);
            $quest = "{$randNumber1} {$randNumber2}";
            $rightAnswer = (string)(calculate($randNumber1, $randNumber2));

            $mathQuest[$i] = [$quest, $rightAnswer];
        }
        return $mathQuest;
    }
    $mathQuest1 = getMathQuest();

    play($mathQuest1, $question);
}
