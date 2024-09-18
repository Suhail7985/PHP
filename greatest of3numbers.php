<?php
$a = readline("\n");
$b = readline("\n");
$c = readline("\n");

$max = ($a > $b) ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);

echo "The greatest number is: $max";
?>
