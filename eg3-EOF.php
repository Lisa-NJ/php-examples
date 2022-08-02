<?php
$name="Magi";
$anotherLine="\n";
$a= <<<EOF
    <h1>EOF</h1>
    "abc"$name
    "123"$anotherLine
EOF;
echo $a;

$b= <<<EOT
    <h1>EOT</h1>
    "abc"$name
    "123"
EOT;
echo $b;

$c= <<<EOD
    <h1>EOD</h1>
    "abc"$name
    123\n
EOD;
echo $c;

$d= <<<ANY
    <h1>ANY</h1>
    "abc"$name
    "123"
ANY;
echo $d;
?>