<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_LOOPS = 3;
function play($mathQuest1, $question)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);

    for ($i = 0; $i < NUMBER_OF_LOOPS; $i += 1) {
        line("Question: {$mathQuest1[$i][0]}");
        $answer = prompt('Your answer');
        if ($answer === $mathQuest1[$i][1]) {
            line("Correct!");
        } else {
            exit("'{$answer}' is wrong answer ;(. Correct answer was '{$mathQuest1[$i][1]}'.\nLet's try again, {$name}!");
        }
    }
        line("Congratulations, {$name}!");
}
