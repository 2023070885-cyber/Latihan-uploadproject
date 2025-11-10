<?php

include 'koneksi.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$NIM = $_POST['NIM'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

$cek = mysqli_query($koneksi, "SELECT Kode FROM Mahasigma_table WHERE Kode = '$kode'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: udh.php");
} else {
    mysqli_query($koneksi, "insert into Mahasigma_table VALUES ('$kode', '$nama', '$NIM', '$jurusan', '$alamat')");
    header("Location: index.php");
}

header('location:index.php');

?>
