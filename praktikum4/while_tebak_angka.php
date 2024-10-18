<?php
    $salah = true; 
    $tebak_angka = 8;

    while ($salah) {
        if ($tebak_angka == 8) {
            $salah = false;
            echo"anda benar! <br>";
        } else {
            echo"jawaban anda salah, silahkan ulangi kembali <br>";
        }
    }