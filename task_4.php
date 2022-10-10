<?php
$a = rand(0,1);
var_dump($a);

$b = $a == 0 ? null : rand(1,3);
var_dump($b);

switch ($b) {
    case null:
        echo "не определено";
        break;
    case 1:
        echo "единичный";
        break;
    default:
        echo "нет совпадений";
}

var_dump(isset($b));

$c = $b ?? rand(20,30) ?? $b;
var_dump($c);