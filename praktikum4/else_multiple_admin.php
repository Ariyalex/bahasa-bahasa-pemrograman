<?php
    $user = "guest";

    if ($user == "admin") {
        echo "Selamat datang admin";
    } else if ($user =="user") {
        echo"selamat datang user";
    } else if ($user =="guest") {
        echo "selamat datang tamu";
    } else {
        echo "maaf, saya tidak kenal anda";
    }