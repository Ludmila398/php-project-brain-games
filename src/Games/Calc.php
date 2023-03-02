<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function Engine\play;

const NUMBER_OF_LOOPS = 3;

function getCalculator()
{
    $question = 'What is the result of the expression?';

    function calculate($symbol, $randNumber1, $randNumber2)
    {
        switch ($symbol) {
            case "+":
                return $randNumber1 + $randNumber2;
            case "-":
                return $randNumber1 - $randNumber2;
            case "*":
                return $randNumber1 * $randNumber2;
        }
    }
    function getMathQuest()
    {
        $mathQuest = [];
        for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
            $randNumber1 = rand(1, 30);
            $randNumber2 = rand(1, 30);
            $symbols = ['+', '-', '*'];
            $symbol = $symbols[rand(0, count($symbols) - 1)];
            $quest = "{$randNumber1} {$symbol} {$randNumber2}";
            $rightAnswer = (string)(calculate($symbol, $randNumber1, $randNumber2));

            $mathQuest[$i] = [$quest, $rightAnswer];
        }
        return $mathQuest;
    }
    $mathQuest1 = getMathQuest();

    play($mathQuest1, $question);
}
