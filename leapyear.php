<?php

$limit = 2024;

for ($c = 4; $c <= $limit; $c+=4) {
    
    if (($c % 4 == 0 && $c % 100 !=0) || $c % 400==0) {
        echo $c . "\n";
    }
}
?>
