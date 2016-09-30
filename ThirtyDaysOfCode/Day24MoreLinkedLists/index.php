<?php

/**
 * Created by PhpStorm.
 * User: abhijeet
 * Date: 12/05/16
 * Time: 11:39 PM
 * https://www.hackerrank.com/challenges/30-linked-list-deletion
 */
class Node
{
    public $data;
    public $next;

    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}

class Solution
{
    function removeDuplicates($head)
    {
        if($head == null) {
            return $head;
        } else{
            $start = $head;
            while($start->next!=null) {
                if($start->data == $start->next->data) {
                    $start->next = $start->next->next;
                } else {
                    $start = $start->next;
                }
            }
        }
        return $head;
    }

    function insert($head, $data)
    {
        //complete this method
        $p = new Node($data);
        if ($head == null) {
            $head = $p;
        } else if ($head->next == null) {
            $head->next = $p;
        } else {
            $start = $head;
            while ($start->next != null) {
                $start = $start->next;
            }
            $start->next = $p;
        }
        return $head;
    }

    function display($head)
    {
        $start = $head;
        while ($start) {
            echo $start->data, ' ';
            $start = $start->next;
        }
    }
}

$T = intval(fgets(STDIN));
$head = null;
$myList = new Solution();
while ($T-- > 0) {
    $data = intval(fgets(STDIN));
    $head = $myList->insert($head, $data);
}
$head = $myList->removeDuplicates($head);
$myList->display($head);
?>
