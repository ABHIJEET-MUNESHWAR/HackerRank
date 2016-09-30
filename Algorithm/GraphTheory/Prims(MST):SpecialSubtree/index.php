<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 03/07/16
 * Time: 12:47 PM
 * https://www.hackerrank.com/challenges/primsmstsub
 */
Class Node
{
    public $marked;
    public $distance;
    public $edges;

    public function __construct()
    {
        $this->marked = false;
        $this->distance = PHP_INT_MAX;
        $this->edges = array();
    }
}

Class Edge
{
    public $node1;
    public $node2;
    public $weight;
}

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

$pq = new SplPriorityQueue();
$mst = array();
fscanf(STDIN, "%d", $startNode);
$startNode--;

$startNode = $nodeArray[$startNode];
foreach ($startNode->edges as &$edge) {
    $pq->insert($edge, $edge->weight * -1);
}

while (!$pq->isEmpty()) {
    $edge = $pq->extract();
    $node1 = $edge->node1;
    $node2 = $edge->node2;
    if ($node1->marked && $node2->marked) {
        continue;
    }
    $mst[] = $edge;
    if (!$node1->marked) {
        $node1->marked = true;
        foreach ($node1->edges as &$edge) {
            $pq->insert($edge, $edge->weight * -1);
        }
    }
    if (!$node2->marked) {
        $node2->marked = true;
        foreach ($node2->edges as &$edge) {
            $pq->insert($edge, $edge->weight * -1);
        }
    }
}
$total = 0;
foreach ($mst as $edge) {
    $total+=$edge->weight;
}
unset($pq);
echo $total . PHP_EOL;

?>