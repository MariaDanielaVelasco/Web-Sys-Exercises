<?php
$systolic = 147;
$diastolic = 91;
 
if ($systolic >= 120 && $systolic < 130 && $diastolic >= 80 && $diastolic < 85) {
    echo '<table bgcolor = green width = 100% cellspacing = 0 cellpadding = 0>';
    echo '<tr style = "text-align: center"> <td style = "border: 1px solid 
    black"> NORMAL </td> </tr>';
    echo '</table>';
}
if($systolic >= 130 && $systolic < 139 && $diastolic >= 85 && $diastolic < 89) {
    echo '<table bgcolor = yellow width = 100% cellspacing = 0 cellpadding = 0>';
    echo '<tr style = "text-align: center"> <td style = "border: 1px solid 
            black"> WARNING </td> </tr>';
    echo '</table>';
}
if ($systolic >= 140 && $diastolic >= 90) {
    echo '<table bgcolor = red width = 100% cellspacing = 0 cellpadding = 0>
     <tr style = "text-align: center"> <td style = "border: 1px solid 
            black"> HIGH </td> </tr>
     </table>';
}
?>

