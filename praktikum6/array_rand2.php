<?php
    $siswa = array("andi", "budi", "caca", "dodi", "edi");
    $key_siswa = array_rand($siswa,2);

    print_r($key_siswa);

    echo $siswa[$key_siswa[0]];
    echo "<br>";
    echo $siswa[$key_siswa[1]];