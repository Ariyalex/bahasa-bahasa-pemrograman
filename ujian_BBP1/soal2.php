<?php
    for( $i =1; $i <= 5; $i++ ) {
        for( $j = 1; $j <= 5;$j++ ) {
            echo $j * $i . ";";
    }
    echo "<br>";
}
// output:
// 1;2;3;4;5;
// 2;4;6;8;10;
// 3;6;9;12;15;
// 4;8;12;16;20;
// 5;10;15;20;25;