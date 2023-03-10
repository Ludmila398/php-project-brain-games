<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const EVEN_QUESTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number)
{
    return $number % 2 === 0;
}

function startCheckIfEven()
{
    $dataForQuest = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber = rand(2, 40);
        if (isEven($randNumber)) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        $dataForQuest[$i] = [$randNumber, $rightAnswer];
    }

    play($dataForQuest, EVEN_QUESTION);
}
