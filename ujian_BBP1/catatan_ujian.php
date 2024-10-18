<!-- perulangan kalender -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar php</title>
</head>
<body>
    pilih tanggal:
    <select name="tgl">
        <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value = $i>$i </option>";
            }
        ?>
    </select>

    pilih bulan:
    <select name="bln">
        <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value = Bulan-$i>Bulan-$i </option>";
            }
        ?>
    </select>

    pilih tahun:
    <select name="thn">
        <?php
            for ($i = 1980; $i <= 2025; $i++) {
                echo "<option value = $i>$i </option>";
            }
        ?>
    </select>
</body>
</html>

<!-- if else -->
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
?>

<!-- switch -->
<?php
    $a = 9;
    switch ($a) {
        case 0 : echo "angka nol"; break;
        case 1 : echo "angka satu"; break;
        case 2 : echo "angka dua"; break;
        case 3 : echo "angka tiga"; break;
        default : echo "angka diluar jangkauan"; break;
    }
?>

<!-- while  -->
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
?>

<!-- string heredoc -->
<?php
  $bahasa="pemrograman PHP";
  $kalimat = <<< "end"
    Sedang belajar bahasa $bahasa,
    mohon jangan diganggu! lagi serius!!
  end;
  var_dump($kalimat);
?>

<!-- perbandingan antar tipe -->
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

?>