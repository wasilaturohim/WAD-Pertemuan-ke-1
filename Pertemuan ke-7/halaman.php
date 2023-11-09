<?php
require 'koneksi.php';

$TABLE_NAME = "pinkstuff";
$barang = query("SELECT * FROM $TABLE_NAME");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Accessories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <a href="tambah.php" class="btn btn-outline-success mx-5 my-3" type="button">Insert</a>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Barang</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Gambar Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Stok Barang</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                foreach ($barang as $item) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><img src="img/<?= $item['gambar_barang'] ?>" class="rounded float-start" alt="" width="60px"></td>
                        <td><?= $item['nama_barang'] ?></td>
                        <td><?= $item['kode_barang'] ?></td>
                        <td><?= $item['harga_barang'] ?></td>
                        <td><?= $item['stok_barang'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $item['kode_barang'] ?>" class="btn btn-success btn-sm mr-1">Update</a>
                            <a href="delete.php?id=<?= $item['kode_barang'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>