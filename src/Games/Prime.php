<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function Engine\play;

const NUMBER_OF_LOOPS = 3;

function calculate(int $randNumber)
{
    $answer = '';
    if ($randNumber === 2) {
        $answer = 'yes';
    }
    for ($i = 2; $i < $randNumber; $i += 1) {
        if ($randNumber % $i === 0) {
            $answer = 'no';
            break;
        } else {
            $answer = 'yes';
        }
    }
    return $answer;
}

function getMathQuest()
{
    $mathQuest = [];

    for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
        $randNumber = rand(2, 40);
        $rightAnswer = calculate($randNumber);
        $mathQuest[$i] = [$randNumber, $rightAnswer];
    }
    return $mathQuest;
}

function checkIfPrime()
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $mathQuest1 = getMathQuest();

    play($mathQuest1, $question);
}
