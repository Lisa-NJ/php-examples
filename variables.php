<?php

# Data Types & Type Casting

# 4 Scalar Types
	# bool - true / false
	# int - 1, 2, 3, -5
	# float - 1.4, -9.8  
	# string


$completed = true;

echo $completed; //1 - echo would convert the content into a string

var_dump(is_bool($completed)); // bool(true)

$incompleted = false;

echo $incompleted; // nothing - false -> string("")

echo gettype($incompleted); // boolean

$score = 69;

echo gettype($score); // integer

$price = 19.9;

echo gettype($price); // double

var_dump($score); // int(69)
var_dump($incompleted); // bool(false)

var_dump($price); // float(19.9)

$name = "Jack";

var_dump($name); // string(4) "Jack"

# 4 Compound Types
	# array
    $companies = [1, 2, true, 'str', true];
    echo '<br />' . $companies;
    print_r($companies);

	# object
	# callable
	# iterable
# 2 Special Types
	# resource
	# null
