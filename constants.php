<?php

define('STATUS_PAID', 'paid'); // defined at runtime 
 
echo STATUS_PAID;

echo defined('STATUS_PAID'); //1 

const STATUS_VOID = 'void'; // defined at compile time

echo STATUS_VOID;

if(true){
    define('STATUS_IF', 'if'); // const is not valid here
}

$pay = 'PAY';

define('STATUS_' . $pay, $pay);

echo STATUS_PAY;

echo PHP_VERSION;