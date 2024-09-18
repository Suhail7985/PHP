<?php
function factorial($n) {
    $f = 1;
    $i = 1;
    while ($i <= $n) {
        $f *= $i;
        $i++;
    }
    return $f;
}

$num = readline("\n");
echo "Factorial of $num is: " . factorial($num);
?>