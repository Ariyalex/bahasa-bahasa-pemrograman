<?php
    include_once("config.php");
    $kode_barang = $_GET['kdbrg'];

    $result = mysqli_query($mysqli, "DELETE FROM barang WHERE kdbrg='$kode_barang'");

    header("Location:tampil.php");