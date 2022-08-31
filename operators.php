<?php
// + - * / % **
$x = '10';
$y = 2;
$z = -$x; // -10

var_dump($x ** $y); // '10' --> 10, 10 * 10

$y1 = 0;
// var_dump(fdiv($x, $y1)); // float(INF)

$f1 = 10.5;
$f2 = 2.9;
var_dump(fmod($f1, $f2)); // float(1.80000...3)
var_dump($f1 % $f2); // int(0) <-- (int)$f1 % (int)$f2 

$f3 = 10;
$f4 = -3;
var_dump($f3 % $f4); // int(1)

// = += -= *= /= %= **=

// . .=
$s1 = 'Hello';
$s2 = ' world';

var_dump($s1 . $s2);
$s .= $s2;
var_dump($s1); 

// <=> == === != !=== <> < > >= <= ?: ??
$x = 10;
$r = $x <=> $y;
echo $r;

$xx = null;
$yy = $xx ?? 'hello';
var_dump($yy);  // string(5) 'hello'

$yy1 = false ?? 'hello';
var_dump($yy1); // bool(false)

// @
$ee = @file('foo.md');

// ++ -- 
$s1 = 'abc';
var_dump($s1++); // string(3) 'abd'
var_dump($s1--); // -- has no effect on a string

// && || ! and or xor 
// short circuiting
$x = true;
$y = false;
$z = $x && $y; // false
var_dump($z);

$z1 = $x and $y; // true <-- ($z1 = $x) and $y
var_dump($z1);

// & | ^ ~ << >>
  
// + == === != <> !==
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f', 'g'];
$z = $x + $y;  // union: check same index / key
print_r($z); 

// `` 
// instance of 
// ?