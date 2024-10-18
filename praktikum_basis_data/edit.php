<?php
include_once("config.php");

if (isset($_POST["update"])) {
    $kode_barang_lama = $_POST["kdbrg_lama"];
    $kode_barang_baru = $_POST["kdbrg"];
    $nama_barang = $_POST["namabrg"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $result = mysqli_query($mysqli, "UPDATE barang SET kdbrg='$kode_barang_baru', namabrg='$nama_barang', harga='$harga', stok='$stok' WHERE kdbrg='$kode_barang_lama'");

    if ($result) {
        header("Location: tampil.php");
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>

<?php
$kode_barang = $_GET["kdbrg"];

$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE kdbrg='$kode_barang'");
$barang_data = mysqli_fetch_array($result);

$nama_barang = $barang_data["namabrg"];
$harga = $barang_data["harga"];
$stok = $barang_data["stok"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <button onclick="location.href='index.php'">go to home</button>
    <br>
    <form action="edit.php" method="post" name="forml">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="text" name="kdbrg" value="<?php echo $kode_barang; ?>" required>
                    <input type="hidden" name="kdbrg_lama" value="<?php echo $kode_barang; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="namabrg" value="<?php echo $nama_barang; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="<?php echo $harga; ?>" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="<?php echo $stok; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>