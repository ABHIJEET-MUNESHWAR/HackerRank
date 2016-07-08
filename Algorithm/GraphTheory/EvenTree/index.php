<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 07/07/16
 * Time: 5:05 PM
 * https://www.hackerrank.com/challenges/even-tree
 */
class Graph
{
    private $edges = 0;
    private $nodes = 0;
    private $answer = 0;
    private $graph = array();
    private $visited = array();

    function __construct()
    {
        $from = 0;
        $to = 0;
        fscanf(STDIN, "%d %d", $this->nodes, $this->edges);
        for ($i = 0; $i < $this->nodes; $i++) {
            $this->visited[$i] = 0;
            $this->graph[] = array_fill(0, $this->nodes, 0);
        }
        for ($i = 0; $i < $this->edges; $i++) {
            fscanf(STDIN, "%d %d", $from, $to);
            $from--;
            $to--;
            $this->graph[$from][$to] = 1;
            $this->graph[$to][$from] = 1;
        }
    }

    function getAnswer()
    {
        return $this->answer;
    }

    function incrementAnswer()
    {
        $this->answer++;
    }

    function depthFirstSearch($vertex)
    {
        $this->visited[$vertex] = 1;
        $noOfVertex = 0;
        for ($i = 0; $i < $this->nodes; $i++) {
            if (($this->graph[$vertex][$i] == 1) && (!$this->visited[$i])) {
                $noOfNodes = $this->depthFirstSearch($i);
                if ($noOfNodes % 2 === 0) {
                    $this->incrementAnswer();
                } else {
                    $noOfVertex += $noOfNodes;
                }
            }
        }
        return ($noOfVertex + 1);
    }
}

$g = new Graph();
$g->depthFirstSearch(0);

echo $g->getAnswer() . PHP_EOL;

?>