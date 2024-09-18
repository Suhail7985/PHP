<?php
function area($shape, $dimensions) {
    if ($shape == 'rectangle' && count($dimensions) == 2) {
        $length = $dimensions[0];
        $width = $dimensions[1];
        $area = $length * $width;
        return $area;
    } elseif ($shape == 'triangle' && count($dimensions) == 2) {
        $base = $dimensions[0];
        $height = $dimensions[1];
        $area = ($base * $height) / 2;
        return $area;
    } elseif ($shape == 'circle' && count($dimensions) == 1) {
        $radius = $dimensions[0];
        $area = pi() * pow($radius, 2);
        return $area;
    } else {
        return "Invalid shape or dimensions.";
    }
}



$calc = area($shape, $dimensions);
echo "The area of the $shape is: $calc";
?>
