<?php
$x = array(
    'fruits' => array("oranges", "apple", "grapes"),
    'color' => array('orange', 'red', 'green')
);

$colorCount = count($x['color']);
echo "Number of colors: " . $colorCount . "\n";

$fruitCount = count($x['fruits']);
echo "Number of fruits: " . $fruitCount . "\n";

print_r($x);
?>

