<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 14/07/16
 * Time: 10:39 PM
 * https://www.hackerrank.com/challenges/the-quickest-way-up
 */
class SnakesAndLadders {
    /*
     * Represent the board as an array
     *   ladders have an integer value representing the endpoint
     *   snakes have an integer value representing the endpoint
     *   regular spaces have a null value
     */
    public $board = [];

    /*
     * Save the best calculated solution for any board space.
     */
    public $boardSolutions = [];

    public function __construct($snakes, $ladders, $boardSize, $dieSize) {
        array_pad($this->board, $boardSize+1, null);
        array_pad($this->boardSolutions, $boardSize+1, null);

        $this->boardSolutions[$boardSize] = 0;
        for ($i = $boardSize+1; $i < $boardSize+$dieSize+1; $i++) {
            $this->boardSolutions[$i] = 9999;
        }

        foreach ($snakes as $snake) {
            $this->board[(int)$snake[0]] = (int)$snake[1];
        }

        foreach ($ladders as $ladder) {
            $this->board[(int)$ladder[0]] = (int)$ladder[1];
        }
    }

    public function solveBoardSpace($boardSpace) {
        if (isset($this->boardSolutions[$boardSpace])) {
            return $this->boardSolutions[$boardSpace];
        } else {
            // cache a fake minimum to mark that we have visited this space and give it a high value in case we hit it again.
            $this->boardSolutions[$boardSpace] = 9999;
        }

        if ($this->board[$boardSpace] === null) {
            // Not a snake or ladder, lets run our possible rolls and get the min recursively.
            $returnValue = 1 + min(
                    $this->solveBoardSpace($boardSpace+6),
                    $this->solveBoardSpace($boardSpace+5),
                    $this->solveBoardSpace($boardSpace+4),
                    $this->solveBoardSpace($boardSpace+3),
                    $this->solveBoardSpace($boardSpace+2),
                    $this->solveBoardSpace($boardSpace+1)
                );
        } else {
            // snake or ladder, follow it.
            $returnValue = $this->solveBoardSpace($this->board[$boardSpace]);
        }

        // cache the minimun
        $this->boardSolutions[$boardSpace] = $returnValue;
        return $this->boardSolutions[$boardSpace];
    }
}

$_fp = fopen("php://stdin", "r");
$boardCount = fgets($_fp);
for ($boardIndex = 0; $boardIndex < $boardCount; $boardIndex++) {
    $snakes = [];
    $ladders = [];

    $ladderCount = fgets($_fp);
    for ($ladderIndex = 0; $ladderIndex < $ladderCount; $ladderIndex++) {
        $ladders[] = explode(' ',fgets($_fp));
    }

    $snakeCount = fgets($_fp);
    for ($snakeIndex = 0; $snakeIndex < $snakeCount; $snakeIndex++) {
        $snakes[] = explode(' ',fgets($_fp));
    }

    $game = new SnakesAndLadders($snakes, $ladders, 100, 6);
    $solution = $game->solveBoardSpace(1);

    echo ($solution > 9999 ? -1 : $solution) . PHP_EOL;
}

?>