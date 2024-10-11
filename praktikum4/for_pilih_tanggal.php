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
</body>
</html>