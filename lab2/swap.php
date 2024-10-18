<?php


function swap(&$a, &$b): void {
    $a ^= $b;
    $b ^= $a;
    $a ^= $b;
}


$a = 5;
$b = 8;
swap($a, $b);
echo (5 === $b);
echo (8 === $a);