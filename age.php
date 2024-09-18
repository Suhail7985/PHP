<?php

$nationality = readline("Enter nationality: \n");
$age = readline("Enter age: \n");

$isEligibleToVote = ($nationality === 'Indian' && $age >= 18);

echo "Is the person eligible to vote? " . ($isEligibleToVote ? 'Eligible' : 'Not Eligible') . "\n";

?>
