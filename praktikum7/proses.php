<?php
if (!isset($_POST["submit"])) {
    header("Location: index.php");
    die();
}

//ambil nilai form
$nama = trim($_POST["nama"]);
$email = trim($_POST["email"]);

//cek apakah nama sudah diisi atau tidak
if (empty($nama)) {
    $pesan = urldecode("Nama harus diisi");
    header("Location: index.php?pesan=$pesan");
    die();
}

//cek apakah email sudah diisi atau tidak
if (empty($email)) {
    $pesan = urldecode("Email harus diisi");
    header("Location: index.php?pesan=$pesan");
    die();
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
    <h2>Proses PHP</h2>
    <?php
        echo "<p>nama: $_POST[nama]</p>";
        echo "<p>Email: $_POST[email]</p>";
        if (isset($_POST["belajar"])) {
            echo "<p>Belajar: $_POST[belajar]</p>";
        }
    ?>
</body>
</html>