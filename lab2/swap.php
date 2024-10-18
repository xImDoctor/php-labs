<?php


function swap(&$a, &$b): void {
    $a ^= $b;
    $b ^= $a;
    $a ^= $b;
}


$a = 5;
$b = 8;
swap($a, $b);

echo '5 === $b: ', (5 === $b) ? 'true' : 'false';
echo "<br>";
echo '8 === $a: ', (8 === $a) ? 'true' : 'false';