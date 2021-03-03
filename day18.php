<?php

class Solution {

    public $stack;
    public $top;
    public $queue;
    public $front;

    public function __construct()
    {
        $this->stack = array();
        $this->top = -1;
        $this->queue = array();
        $this->front = 0;
        $this->back = -1;
    }

    public function pushCharacter($s)
    {
        $this->top++;
        $this->stack[$this->top] = $s;
        
    }

    public function enqueueCharacter($s)
    {
        $this->back++;
        $this->queue[$this->back] = $s;
    }

    public function popCharacter()
    {
        if ($this->top === -1) return null;
        $last = $this->stack[$this->top];
        $this->top--;

        return $last;
    }

    public function dequeueCharacter()
    {
        if ($this->back === -1) return null;
        $first = $this->queue[$this->front];
        $this->front++;
        
        return $first;
    }
}

// read the string s
$s = fgets(STDIN);

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
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>