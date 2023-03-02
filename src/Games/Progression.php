<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function Engine\play;

const NUMBER_OF_LOOPS = 3;

function getProgression()
{
    $question = 'What number is missing in the progression?';

    function calculate($progrStep, $progrStart)
    {
        $progr = [];
        $temp = $progrStart;
        for ($i = 0; $i < 10; $i += 1) {
            $progr[] = $temp;
            $temp += $progrStep;
        }
        return $progr;
    }

    function getMathQuest()
    {
        $mathQuest = [];
        for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
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
    $mathQuest1 = getMathQuest();

    play($mathQuest1, $question);
}
