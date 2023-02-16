<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function checkIfEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    $count = 0;
    for ($i = 0; $i < 3; $i += 1) {
        $randNumber = rand();
        print_r("Question: {$randNumber}\n");
        $answer = prompt('Your answer');
        if (($answer === 'yes') && ($randNumber % 2 === 0)){
            print_r("Correct!\n");
            $count +=1;
        } elseif (($answer === 'no') && ($randNumber % 2 !== 0)) {
            print_r("Correct!\n");
            $count +=1;
        } else {
            print_r("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!");
            break;
        }   
    }
    if ($count === 3){
        print_r("Congratulations, {$name}!");
    }
}