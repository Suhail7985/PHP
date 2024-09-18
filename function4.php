<?php
function outer() {
    $a = "Hello";

    $inner = function() use (&$a) {
        $a = "Hello from inner function";
        echo "Inner function message: $a\n";
    };

    echo "Outer function message before inner function call: $a\n";
    
    $inner();

    echo "Outer function message after inner function call: $a\n";
}

outer();
?>
