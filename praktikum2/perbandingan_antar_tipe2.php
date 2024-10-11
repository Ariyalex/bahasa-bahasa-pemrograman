<?php
    var_dump(10 == '10'); // true
    var_dump(10 === '10'); // false
    var_dump('andi' ==0); // false

    var_dump('10 ayam' == 10); //false
    var_dump('10 ayam' ===10); //false
    var_dump(true < false); //false

    $siswa1 = array("anto","andri");
    $siswa2 = array("anto","andri");
    var_dump($siswa1 == $siswa2); //true