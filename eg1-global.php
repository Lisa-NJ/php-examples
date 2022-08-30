<?php
$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
  
echo 'My name is $foo';  // My name is $foo -- "" != ''
echo "My name is $foo";
echo "My name is {$foo}";

echo $bar;
echo $foo; 

$num = 24;
$num1 = &$num;
$num1 = 36;

echo $num;
echo $num1;
var_dump($num);

$a = 1;
$b = 2;
function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 
function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 
Sum();
echo $b;
Sum1();
echo $b;
?>