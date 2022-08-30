<?php

// isset() array_key_exists() count() [] array() array_push() 'key'==>'8.0' array_pop array_shift unset 

$name = 'Lisa';

echo $name[0]; // L

echo $name[-1]; // a

$programsLs = array('Vue', 'React', 'HTML');

$programLanguages = ['PHP', 'Java', 'Python'];

var_dump(isset($programLanguages[3])); // false

var_dump(isset($programLanguages[1])); // true

echo($programLanguages);

echo '<pre>';

print_r($programLanguages);

echo '</pre>';

echo count($programLanguages);

$programLanguages[] = 'C++'; // push a new element to the end of an array

array_push($programLanguages, 'C', 'Matlab', 'CSS');

$programLsKeys = [
    'python' => '3.9',
    'php' => [
        'creator'  => 'Rasmus',
        'website'  => 'www.php.net',
        'versions' => ['8.0', '7.4']
    ]
];

echo $programLsKeys['php']['creator'];

echo '<pre>';

print_r($programLsKeys);

echo '</pre>';

$programLsKeys['go'] = '1.15';

echo '<pre>';

print_r($programLsKeys['php']);

echo '</pre>';

$newL = 'vue';

$programLsKeys[$newL] = '2.4';

// overwrite key: integer || string
$arry = [true => 'a', 1 => 'b', '1' => 'c', 1.6 => 'd', null => 'e'];

print_r($arry); // Array([1] => d[] => e)

echo $arry[null]; // e

$arry2 = ['a', 'b', 50 => 'c', 'd', 'e'];

print_r($arry2); // keys - 0 1 50 51 52

echo array_pop($arry2); // remove and return the last element -> re-index

echo array_shift($arry2); // remove and return the 1st element -> re-index

print_r($arry2);

unset($arry2[50], $arry2[1]); // remove the element 'c' 'b', will not re-index

$arry2[] = 'f'; // index will continue

unset($arry2); // destroy the array

// print_r($arry2);

$x = 5;

var_dump((array) $x);  // array(1){[0]=>int(5)}

$y = null;

var_dump((array) $y);  // array(0){}

$arry3 = [50=>null, 'g', 'h'];

var_dump(array_key_exists(50, $arry3)); // bool(false) - tell if the key-element exists

var_dump(isset($arry3[50])); //bool(false) - would tell the value
