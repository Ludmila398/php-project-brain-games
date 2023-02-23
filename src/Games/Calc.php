<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function calculator()
{
    $question = 'What is the result of the expression?';
    
    function calculation($symbol, $randNumber1, $randNumber2)
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
    function mathQuest()
    {
    $mathQuest = [];
    for ($i = 0; $i < 3; $i += 1) {
        $randNumber1 = rand(1, 30);
        $randNumber2 = rand(1, 30);
        $symbols = ['+', '-', '*'];
        $symbol = $symbols[rand(0, count($symbols)-1)];
        $quest = "{$randNumber1} {$symbol} {$randNumber2}";
        $rightAnswer = calculation($symbol, $randNumber1, $randNumber2);

        $mathQuest[$i] = [$randNumber1, $symbol, $randNumber2, $rightAnswer, $quest];
        
    }
    return $mathQuest;
    }
    $mathQuest1 = mathQuest();

    game($mathQuest1, $question);
}