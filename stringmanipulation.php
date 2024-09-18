<?php
function addsuff($suff) {
    $suff = "abc" . $suff; 
    return $suff; 
}

$suff = "_done"; 
$result = addsuff($suff); 
echo $result; 
echo "\n"; 
echo $suff;
?>
