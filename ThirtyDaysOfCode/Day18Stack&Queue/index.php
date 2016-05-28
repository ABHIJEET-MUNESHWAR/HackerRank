<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 05/05/16
 * Time: 10:21 PM
 * https://www.hackerrank.com/challenges/30-queues-stacks
 * // END - push, pop
 * // START - unshift, shift
 */
class Solution
{
    private $stack;
    private $queue;
    public function __construct()
    {
        $this->stack = array();
        $this->queue = array();
    }

    public function pushCharacter($c) {
        array_push($this->stack, $c);
    }

    public function enqueueCharacter($c) {
        array_push($this->queue, $c);
    }

    public function popCharacter() {
        return array_pop($this->stack);
    }

    public function dequeueCharacter() {
        return array_shift($this->queue);
    }
}

// read the string s
$s = rtrim(fgets(STDIN), "\n\r");

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, " . $s . ", is a palindrome.";
else
    echo "The word, " . $s . ", is not a palindrome.";
?>