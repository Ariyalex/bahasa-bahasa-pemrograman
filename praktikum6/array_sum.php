<?php
    $nilai = array(98, 59, 42, 65, 87);
    echo array_sum($nilai);
    echo  "<br>";

    $nilai = array(9.8, 5.9, 4.2);
    echo array_sum($nilai);
    echo "<br>";

    $nilai = array("anton" => 82, "ruddy" => 81, "joko" => 95, "budi" => 75);
    $nilai_rata2 = array_sum($nilai)/count($nilai);
    echo "nilai rata-rata : $nilai_rata2";