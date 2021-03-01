<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{

function insert($head,$data){
        $node=(object) array();
        if($head==null){
            $node->data=$data;
            $node->next=null;     
            return $node;
        }
        if($head->next==null){
            $node->data=$data;
            $node->next=null;
            $head->next=$node;
            return $head;
        }
        
        $this->insert($head->next,$data);  

        return $head;   
   
    }

function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
