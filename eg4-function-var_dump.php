<?php
// All functions and classes in PHP have the global scope 
// possible to call recursive functions in PHP.

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

recursion(15);

// var_dump — Dumps information about a variable
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

$b = 3.1;
$c = true;
var_dump($b, $c);

?>