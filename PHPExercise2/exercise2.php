<?php
$arr = array(1, 2, 3, 5, 7);

echo"<pre>";
foreach($arr as $val) {
    echo $val * 2 . "\t";
    echo pow($val, 2) . "\t";
    echo pow($val, 3) . "<br>";
 }
?>


