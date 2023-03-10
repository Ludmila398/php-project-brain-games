<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function Engine\play;
use const Engine\NUMBER_OF_ROUNDS;
const PROGR_QUESTION = 'What number is missing in the progression?';

function calculate(int $progrStep, int $progrStart)
{
    $progr = [];
    $temp = $progrStart;
    for ($i = 0; $i < 10; $i++) {
        $progr[] = $temp;
        $temp += $progrStep;
    }
    return $progr;
}

function getMathQuest()
{
    $mathQuest = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progrStep = rand(2, 7);
        $progrStart = rand(2, 15);
        $progrArray = calculate($progrStep, $progrStart);
        $hiddenNumber = rand(0, 9);
        $rightAnswer = (string)($progrArray[$hiddenNumber]);
        $progrArray[$hiddenNumber] = '..';
        $quest = implode(' ', $progrArray);
        $mathQuest[$i] = [$quest, $rightAnswer];
    }
    return $mathQuest;
}

function startGetProgression()
{
    $dataForQuest = getMathQuest();

    play($dataForQuest, PROGR_QUESTION);
}
