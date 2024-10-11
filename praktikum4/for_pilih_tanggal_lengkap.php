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