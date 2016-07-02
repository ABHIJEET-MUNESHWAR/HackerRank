<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 02/07/16
 * Time: 6:24 PM
 * https://www.hackerrank.com/challenges/dijkstrashortreach
 */
Class Node
{
    public $relaxed;
    public $distance;
    public $edges;

    public function __construct()
    {
        $this->relaxed = false;
        $this->distance = PHP_INT_MAX;
        $this->edges = array();
    }
}

Class Edge
{
    public $node1;
    public $node2;
    public $weight;

    public function getOtherNode(&$node)
    {
        if ($node == null) {
            return $this->node1;
        }
        if ($node === $this->node1) {
            return $this->node2;
        }
        if ($node === $this->node2) {
            return $this->node1;
        }
    }
}

fscanf(STDIN, "%d", $t);
while ($t--) {
    $nodeArray = array();
    $nodeCount = 0;
    $edgeCount = 0;
    fscanf(STDIN, "%d %d", $nodeCount, $edgeCount);
    for ($i = 0; $i < $nodeCount; $i++) {
        $nodeArray[] = new Node();
    }
    for ($i = 0; $i < $edgeCount; $i++) {
        $node1 = 0;
        $node2 = 0;
        $weight = 0;
        fscanf(STDIN, "%d %d %d", $node1, $node2, $weight);
        $node1--;
        $node2--;
        $edge = new Edge();
        $edge->node1 = $nodeArray[$node1];
        $edge->node2 = $nodeArray[$node2];
        $edge->weight = $weight;
        $nodeArray[$node1]->edges[] = $edge;
        $nodeArray[$node2]->edges[] = $edge;
    }
    fscanf(STDIN, "%d", $startNode);
    $startNode--;
    $startNode = $nodeArray[$startNode];
    $startNode->distance = 0;
    $pq = new SplPriorityQueue();
    $pq->insert($startNode, $startNode->distance);
    while (!$pq->isEmpty()) {
        $node = $pq->extract();
        if ($node->relaxed) {
            continue;
        }
        foreach ($node->edges as &$edge) {
            $destination = $edge->getOtherNode($node);
            if (($node->distance + $edge->weight) < $destination->distance) {
                $destination->distance = $node->distance + $edge->weight;
            }
            $pq->insert($destination, $destination->distance * -1);
        }
        $node->relaxed = true;
    }
    foreach ($nodeArray as $node) {
        if ($node->distance == 0) {
            continue;
        }
        if ($node->distance == PHP_INT_MAX) {
            echo "-1 ";
        } else {
            echo $node->distance . " ";
        }
    }
    unset($pq);
    echo PHP_EOL;
}

?>