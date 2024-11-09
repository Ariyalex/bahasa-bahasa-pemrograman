<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        button {
            margin: 20px;
            background-color: #4CAF50;
            color: white;
            width: 150px;
            height: 30px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        table {
            font-size: 17px;
            width: auto;
        }
    </style>
</head>
<body>
    <button onclick="location.href='index.php'">go to home</button>
    <br>
    <form action="isidata.php" method="post" name="forml">
        <table>
            <tr>
                <td>Kode barang</td>
                <td><input type="text" name="kdbrg" required></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namabrg" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Add" name="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST["Submit"])) {
            $kode_barang = $_POST["kdbrg"];
            $nama_barang = $_POST["namabrg"];
            $harga = $_POST["harga"];
            $stok = $_POST["stok"];

            // Include database connection file
            include_once("config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO barang(kdbrg, namabrg, harga, stok) VALUES('$kode_barang', '$nama_barang', '$harga', '$stok')");

            // Show message when user added
            if ($result) {
                echo "Barang berhasil ditambahkan. <a href='tampil.php'>Lihat Barang</a>";
            } else {
                echo "Gagal menambahkan barang: " . mysqli_error($mysqli);
            }
        }
    ?>
</body>
</html>