<?php
$a = 'hello';
$$a = 'world';

echo "$a ${$a}"; //= echo "$a $hello"; hello world
echo "$a {$$a}"; // hello world
echo "$a, $$a";  // hello, $hello

/** array ( , , ) 
 *  class, new, ->
 * . connct two strings
 *  {}
 * */
class foo { 
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";
$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$output = 'output = ' . $start . $end;

echo $output;

/**  2 ways to declare an array: array(), []
 *   array('I am A.', 'I am B.', 'I am C.') equals to 
 *   array(
 *      0 => 'I am A.',
 *      1 => 'I am B.',
 *      2 => 'I am C.'
 *   )
 */

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);
$array1 = [
    "foo" => "bar",
    "bar" => "foo",
];

echo count($array);

?>