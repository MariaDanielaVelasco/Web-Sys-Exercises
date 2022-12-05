<?php
function calculate($color1, $color2) {
    $arr = [0, 1, 2, 3, 4];
    echo "<table style = width: 100%>";
    echo"<pre>";
    foreach($arr as $val) {
        if ($val % 2 == 0) { 
            echo "<table bgcolor =" . $color1 . "width = 100%>"; 
            echo "<tr>";
            echo "<td width = 33%>" . $val * 2 ."</td>"; 
            echo "<td width = 33%>" . pow($val, 2) . "</td>"; 
            echo "<td width = 33%>" . pow($val, 3) . "</td>"; 
            echo "</tr>";
            echo "</table>";
        } else {
            echo "<table bgcolor =" . $color2 . "width = 100%>"; 
            echo "<tr>";
            echo "<td width = 33%>" . $val * 2 ."</td>"; 
            echo "<td width = 33%>" . pow($val, 2) . "</td>"; 
            echo "<td width = 33%>" . pow($val, 3) . "</td>"; 
            echo "</tr>";
            echo "</table>";
        }
    }
}
calculate("cyan", "pink");
echo "<br>";
calculate("#CCCCCC", "#999999")

?>
