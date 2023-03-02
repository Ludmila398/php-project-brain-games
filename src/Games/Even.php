<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_LOOPS = 3;

function checkIfEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
        $randNumber = rand();
        line("Question: {$randNumber}");
        $answer = prompt('Your answer');
        if (($answer === 'yes') && ($randNumber % 2 === 0)) {
            line("Correct!");
        } elseif (($answer === 'no') && ($randNumber % 2 !== 0)) {
            line("Correct!");
        } else {
            exit("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!");
        }
    }
        line("Congratulations, {$name}!");
}
