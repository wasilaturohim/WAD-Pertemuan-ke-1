<?php



$database = 'tugaswad';
$hostname = 'localhost:3308';
$username = 'root';
$password = '';
$conn = mysqli_connect($hostname, $username, $password, $database);


function query($query)
{

    global $conn;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn)  . "<br>Query: " . $query);
    }

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert_stuff($gambar_barang, $nama_barang, $kode_barang, $harga_barang, $stok_barang)
{
    global $conn;

    $query = "INSERT INTO pinkstuff (kode_barang, nama_barang, harga_barang, stok_barang, gambar_barang)
                VALUES ('$kode_barang', '$nama_barang', '$harga_barang', '$stok_barang', '$gambar_barang')";
    mysqli_query($conn, $query);


    // header("Location: halaman.php");
    // exit();
}

function update_stuff($kode_barang, $data)
{
    global $conn;
    $nama_barang = $data['nama_barang'];
    $harga_barang = $data['harga_barang'];
    $stok_barang = $data['stok_barang'];
    $gambar_barang = $data['gambar_barang'];

    $query = "UPDATE pinkstuff SET  
    nama_barang = '$nama_barang', 
    harga_barang = '$harga_barang', 
    stok_barang = '$stok_barang', 
    gambar_barang = '$gambar_barang' 
    WHERE kode_barang = '$kode_barang'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function delete_stuff($kode_barang)
{
    global $conn;

    $query = "DELETE FROM pinkstuff WHERE kode_barang = '$kode_barang'";

    mysqli_query($conn, $query);

    // header("Location: mainpage.php");
    // exit();
}
