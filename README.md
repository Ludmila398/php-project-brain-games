### Hexlet tests and linter status:
[![Actions Status](https://github.com/Ludmila398/php-project-45/workflows/hexlet-check/badge.svg)](https://github.com/Ludmila398/php-project-45/actions)

### Maintainability Badge
<a href="https://codeclimate.com/github/Ludmila398/php-project-brain-games/maintainability"><img src="https://api.codeclimate.com/v1/badges/0cea80e89b8cb2a09d06/maintainability" /></a>

## Project description

"Brain Games" is a set of five console games inspired by popular brain-training mobile apps. Each game presents questions that require correct answers. Each game is completed after three correct answers. A wrong answer ends the game and offers a restart.

Games:
* Calculator: Solve arithmetic expressions.
* Progression: Find the missing number in a sequence.
* Even Check: Determine if a number is even.
* GCD: Calculate the greatest common divisor.
* Prime Check: Identify if a number is prime.

## Requirements

- PHP >= 8.1
- Composer

## Installation

Clone the repo and enter the project folder:
```
git clone git@github.com:Ludmila398/php-project-brain-games.git

cd php-project-brain-games
```
Install dependencies using Composer.
Ensure that `make` is installed and available on your system. The `make install` command will use Composer to install dependencies and prepare the project:
```
make install
```
Make sure the files in bin/ have execute permissions:
```
chmod +x bin/brain-calc
chmod +x bin/brain-even
chmod +x bin/brain-gcd
chmod +x bin/brain-prime
chmod +x bin/brain-progression
```

## Running the Program
To start the games, use the following commands:  
* make brain-calc
* make brain-progression
* make brain-even
* make brain-gcd
* make brain-prime

## Examples of usage

### asciinema.org brain-calc
[![asciicast](https://asciinema.org/a/t8ajujWfjqHbNvviAGY41sDed.svg)](https://asciinema.org/a/t8ajujWfjqHbNvviAGY41sDed)

### asciinema.org brain-progression
[![asciicast](https://asciinema.org/a/zEW0StWaQRyVnolPbDyEzTCen.svg)](https://asciinema.org/a/zEW0StWaQRyVnolPbDyEzTCen)

### asciinema.org brain-even
[![asciicast](https://asciinema.org/a/8VhvtUfq3rk04QUCVHJZTzH90.svg)](https://asciinema.org/a/8VhvtUfq3rk04QUCVHJZTzH90)

### asciinema.org brain-gcd
[![asciicast](https://asciinema.org/a/3ogcdjQPXIOnApMM1xBbSM9cG.svg)](https://asciinema.org/a/3ogcdjQPXIOnApMM1xBbSM9cG)

### asciinema.org brain-prime
[![asciicast](https://asciinema.org/a/yGDiNhNjw3Ue8CTh2lMwmSMWo.svg)](https://asciinema.org/a/yGDiNhNjw3Ue8CTh2lMwmSMWo)
