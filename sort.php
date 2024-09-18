<?php
$a=[["name"=>"Sofia","marks"=> "31"],["name"=>"Jacob","marks" => "41"],["name"=>"william","marks" => "39"],["name"=>"Ramesh","marks" => "40"]];
usort($a, function($b,$c){
    return $a['marks'] <=> $b['marks'];
});
print_r ($a);
?>