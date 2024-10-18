<?php
    $siswa = array("andi", "budi", "caca", "dodi", "edi");
    $key_siswa = array_rand($siswa);

    echo $key_siswa. "<br>";
    echo $siswa[$key_siswa];