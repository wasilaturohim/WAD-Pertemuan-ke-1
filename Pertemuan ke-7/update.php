<?php
require 'koneksi.php';

$kode_barang = $_GET['id'];

$brg = query("SELECT * FROM pinkstuff WHERE kode_barang = $kode_barang")[0];

if (isset($_POST['submit'])) {
    $data = [
        'nama_barang' => $_POST['nama_barang'],
        'harga_barang' => $_POST['harga_barang'],
        'stok_barang' => $_POST['stok_barang'],
        'gambar_barang' => $_POST['gambar_barang']
    ];
    if (update_stuff ($kode_barang, $data) >0 ){
        echo " 
            <script>
            alert ('data berhasil di ubah'); 
            document.location.href= 'halaman.php';
            </script>
         ";
    }else{
        echo "
        <script>
        alert('data gagal di ubah!');
        document.location.href = 'halaman.php';
        </script>";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update barang di Toko Accessoris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Update Data Barang</h1>
    <form action="" method="post">
    <input type="hidden" name="kode_barang" value="<?= $brg['kode_barang'];?>" >
        <ul>
            <li>
                <label for="gambar_barang">Gambar Barang : </label>
                <input type="file" name="gambar_barang" id="gambar_barang" required value="<?= $brg['gambar_barang'];?>">
            </li>
            <li>
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang" id="nama_barang" required value="<?= $brg['nama_barang'];?>">
            </li>
            <li>
                <label for="harga_barang">Harga Barang : </label>
                <input type="text" name="harga_barang" id="harga_barang" required value="<?= $brg['harga_barang'];?>">
            </li>
            <li>
                <label for="stok_barang">Stok Barang : </label>
                <input type="text" name="stok_barang" id="stok_barang" required value="<?= $brg['stok_barang'];?>">
            </li>
        </ul>
        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        <button type="cancel" name="cancel" class="btn btn-outline-secondary">Batal</button></a>
    </form>
</body>

</html>