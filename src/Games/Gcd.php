<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const QUESTION = 'Find the greatest common divisor of given numbers.';

function findDivisor(int $randNumber1, int $randNumber2): int
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

function getMathQuestion()
{
    $mathQuestion = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber1 = rand(1, 101);
        $randNumber2 = rand(1, 101);
        $question = "{$randNumber1} {$randNumber2}";
        $rightAnswer = (string)(findDivisor($randNumber1, $randNumber2));

        $mathQuestion[$i] = ['question' => $question, 'right answer' => $rightAnswer];
    }
    return $mathQuestion;
}

function startFindDivisor()
{
    $dataForQuestion = getMathQuestion();

    play($dataForQuestion, QUESTION);
}
