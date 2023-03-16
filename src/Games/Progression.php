<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const QUESTION = 'What number is missing in the progression?';

function calculate(int $progrStep, int $progrStart): array
{
    $progression = [];
    $temp = $progrStart;
    for ($i = 0; $i < 10; $i++) {
        $progression[] = $temp;
        $temp += $progrStep;
    }
    return $progression;
}

function startGetProgression()
{
    $mathQuestion = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progrStep = rand(2, 7);
        $progrStart = rand(2, 15);
        $progrArray = calculate($progrStep, $progrStart);
        $hiddenNumber = rand(0, 9);
        $rightAnswer = (string) $progrArray[$hiddenNumber];
        $progrArray[$hiddenNumber] = '..';
        $question = implode(' ', $progrArray);
        $mathQuestion[$i] = ['question' => $question, 'right answer' => $rightAnswer];
    }

    play($mathQuestion, QUESTION);
}
