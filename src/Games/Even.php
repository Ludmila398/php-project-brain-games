<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const QUESTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function startCheckIfEven()
{
    $mathQuestion = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber = rand(2, 40);
        $rightAnswer = (isEven($randNumber)) ? 'yes' : 'no';
        $mathQuestion[$i] = ['question' => $randNumber, 'right answer' => $rightAnswer];
    }

    play($mathQuestion, QUESTION);
}
