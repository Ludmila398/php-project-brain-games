<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function Engine\play;
use const Engine\NUMBER_OF_ROUNDS;
const GCD_QUESTION = 'Find the greatest common divisor of given numbers.';

function findDivisor(int $randNumber1, int $randNumber2)
{
    if ($randNumber1 > $randNumber2) {
        $temp =  $randNumber2;
    } else {
        $temp =  $randNumber1;
    }
    for ($i = $temp; $i >= 1; $i--) {
        if (($randNumber1 % $i === 0) && ($randNumber2 % $i === 0)) {
            return $i;
        }
    }
}

function getMathQuest()
{
    $mathQuest = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber1 = rand(1, 101);
        $randNumber2 = rand(1, 101);
        $quest = "{$randNumber1} {$randNumber2}";
        $rightAnswer = (string)(findDivisor($randNumber1, $randNumber2));

        $mathQuest[$i] = [$quest, $rightAnswer];
    }
    return $mathQuest;
}

function startFindDivisor()
{
    $dataForQuest = getMathQuest();

    play($dataForQuest, GCD_QUESTION);
}
