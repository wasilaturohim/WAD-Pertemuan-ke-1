<?php
require 'koneksi.php';
$kode_barang = $_GET['id'];

if (isset($_POST['submit'])) {
    // $kode_barang = $_POST['id'];
    // echo $kode_barang;
    delete_stuff($kode_barang);
    header("Location: halaman.php");
    exit();
} elseif (isset($_POST['cancel'])) {
    header("Location: halaman.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hapus Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <h1>Hapus barang </h1>
        <p>Kamu yakin ingin menghapus barang?</p>
        <button type="submit" name="submit" class="btn btn-outline-primary" >Hapus</button>
        <button type="cancel" name="cancel" class="btn btn-outline-danger">Batal</button>
    </form>
</body>

</html>