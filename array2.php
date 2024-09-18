<?php
$userArray = [10, 3, 5, 2, 8, 1, 7];
$oddNumbers = [];
foreach ($userArray as $num) {
    if ($num % 2 != 0) {
        $oddNumbers[] = $num;
    }
}
$totalSum = array_sum($oddNumbers);
sort($oddNumbers);
$squaredNumbers = [];
foreach ($oddNumbers as $num1) {
    $squaredNumbers[] = $num1 * $num1; 
}
echo "Square of the sorted odd numbers: " . implode(", ", $squaredNumbers) . "\n"; 
echo "Sorted odd numbers: " . implode(", ", $oddNumbers) . "\n";
echo "Sum of sorted odd numbers: " . $totalSum . "\n";
?>
