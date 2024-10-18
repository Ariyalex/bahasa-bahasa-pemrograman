<?php
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT * FROM barang ORDER BY kdbrg ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <button onclick="location.href='index.php'">go to home</button>
    <table>
        <?php
        while ($barang_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>Kode Barang</td>";
            echo "<td>: ".$barang_data['kdbrg']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Nama Barang</td>";
            echo "<td>: ".$barang_data['namabrg']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Harga</td>";
            echo "<td>: ".$barang_data['harga']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Stok</td>";
            echo "<td>: ".$barang_data['stok']."</td>";
            echo "</tr>";
            
            //edit dan hapus
            echo "<tr>";
            echo "<td><a href='edit.php?kdbrg=$barang_data[kdbrg]'>Edit</a> | <a href='delete.php?kdbrg=$barang_data[kdbrg]'>Delete</a></td>";
        }
        ?>
    </table>
</body>
</html>