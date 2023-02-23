<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;


function game($mathQuest1, $question) 
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);

    $count = 0;
    for ($i = 0; $i < 3; $i += 1) {
        print_r("Question: {$mathQuest1[$i][4]}\n");
        $answer = (int)(prompt('Your answer'));
        if ($answer === $mathQuest1[$i][3]) {
            print_r("Correct!\n");
            $count +=1;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$mathQuest1[$i][3]}'.\nLet's try again, {$name}!");
            break;
        }   
    }
    if ($count === 3){
        print_r("Congratulations, {$name}!");
    }
}