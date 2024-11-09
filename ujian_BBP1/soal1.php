<?php
    for( $i = 1; $i <=5; $i++ ) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    // output:
    // 1
    // 12
    // 123
    // 1234
    // 12345
