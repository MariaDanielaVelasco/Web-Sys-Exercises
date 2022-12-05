<?php
function stars($numOfStars = 0) { 
    for($i = 0; $i < $numOfStars; $i++) {
        for($j = 0; $j < 5; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
    stars (15);    
?>


