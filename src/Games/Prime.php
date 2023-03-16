<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const QUESTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $randNumber): bool
{
    if ($randNumber === 2) {
        return true;
    }
    for ($i = 2; $i < $randNumber; $i++) {
        if ($randNumber % $i === 0) {
            return false;
        }
    }
    return true;
}

function startCheckIfPrime()
{
    $mathQuestion = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber = rand(2, 40);
        $rightAnswer = (isPrime($randNumber)) ? 'yes' : 'no';
        $mathQuestion[$i] = ['question' => $randNumber, 'right answer' => $rightAnswer];
    }

    play($mathQuestion, QUESTION);
}
