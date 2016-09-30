<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 12/05/16
 * Time: 8:32 PM
 * https://www.hackerrank.com/challenges/30-binary-trees
 */
class Node
{
    public $left, $right;
    public $data;

    function __construct($data)
    {
        $this->left = $this->right = null;
        $this->data = $data;
    }
}

class Solution
{
    public function insert($root, $data)
    {
        if ($root == null) {
            return new Node($data);
        } else {
            if ($data <= $root->data) {
                $cur = $this->insert($root->left, $data);
                $root->left = $cur;
            } else {
                $cur = $this->insert($root->right, $data);
                $root->right = $cur;
            }
            return $root;
        }
    }

    private $queue;

    function __construct()
    {
        $this->queue = array();
    }

    public function isQueueEmpty()
    {
        return count($this->queue);
    }

    public function enQueue($node)
    {
        array_push($this->queue, $node);
    }

    public function deQueue()
    {
        return array_shift($this->queue);
    }


    public function levelOrder($root)
    {
        if ($root !== null) {
            $this->enQueue($root);
            while ($this->isQueueEmpty()) {
                $node = $this->deQueue();
                echo $node->data . " ";
                if ($node->left !== null) {
                    $this->enQueue($node->left);
                }
                if ($node->right !== null) {
                    $this->enQueue($node->right);
                }
            }
        }
    }
}

$myTree = new Solution();
$root = null;
$T = intval(fgets(STDIN));
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $root = $myTree->insert($root, $data);
}
$myTree->levelOrder($root);
?>
