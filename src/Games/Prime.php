<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function Engine\play;

use const Engine\NUMBER_OF_ROUNDS;

const PRIME_QUESTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

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

function getMathQuest()
{
    $mathQuest = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $randNumber = rand(2, 40);

        if (isPrime($randNumber)) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        $mathQuest[$i] = [$randNumber, $rightAnswer];
    }
    return $mathQuest;
}

function startCheckIfPrime()
{
    $dataForQuest = getMathQuest();

    play($dataForQuest, PRIME_QUESTION);
}
