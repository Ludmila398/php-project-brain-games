<?php

namespace Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;
function play(array $mathQuestion, string $question)
{
    line('Welcome to the Brain Games!!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        line("Question: {$mathQuestion[$i]['question']}");
        $answer = prompt('Your answer');
        if ($answer === $mathQuestion[$i]['right answer']) {
            line("Correct!");
        } else {
            exit("'{$answer}' is wrong answer ;(. Correct answer was '{$mathQuestion[$i]['right answer']}'.\nLet's try again, {$name}!");
        }
    }
        line("Congratulations, {$name}!");
}
