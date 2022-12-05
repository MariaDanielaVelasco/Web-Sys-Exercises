<?php
$data = 25;

if($data %2 == 0) {
    //$data is even
    echo '<table bgcolor = blue width = 100% 
            cellspacing = 0 cellpadding = 0>';
    echo '<tr style = "text-align: center"> 
            <td style = "border: 1px solid 
            black"> EVEN </td> </tr>';
    echo '</table>';
} else {
    //$data is odd
    echo '<table bgcolor = green width = 100% 
            cellspacing = 0 cellpadding = 0>';
    echo '<tr style = "text-align: center"> 
            <td style = "border: 1px solid 
            black"> ODD </td> </tr>';
    echo '</table>';
}
?>

 