<?php
    if (isset($_GET["pesan"])) {
        $pesan = "<p> {$_GET["pesan"]} </p>";
    } else {
        $pesan = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pemrosesan Form</h1>
    <?php echo $pesan ?>
    <form action="proses.php" method="post">
        <p>nama: <input type="text" name="nama"></p>
        <p>Email: <input type="text" name="email"></p>
        <p><label><input type="checkbox" name="belajar" value="php">Belajar PHP</label></p>
        <input type="submit" value="Proses Data" name="submit">
    </form>
</body>
</html>