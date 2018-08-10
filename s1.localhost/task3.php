<?php
print_r($_POST);
array_walk($_POST,"test");
function test(&$val,$key){
foreach ($val as $k=> $v)
$val[$k] = $v*10;
}
print_r($_POST);
?>