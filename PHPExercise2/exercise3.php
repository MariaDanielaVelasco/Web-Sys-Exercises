<?php
for($i=0; $i < 5 ; $i++) {
    if ($i % 2 == 0) { 
        echo "<table bgcolor = #FFFF9A width = 100%>"; 
        echo "<tr>"; 
        echo "<td>" . $i. "<br>" . "</td>"; 
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<table bgcolor = #65FF9A width = 100%>";
        echo "<tr>";
        echo "<td>" . $i . "<br>" . "</td>";
        echo "</tr>";
        echo "</table>";
        }
    }  
?>


