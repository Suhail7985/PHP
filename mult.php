<?php
$result=array(
    array("Manoj",7.8,"pass"),
    array("Rahul",8.9,"pass"),
    array("Anuj",8.9,"fail")
);
foreach($result as $num){
    foreach($num as $r1){
        echo $r1;
    }
}
?>