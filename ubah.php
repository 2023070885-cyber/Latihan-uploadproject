<?php

include 'koneksi.php';

$kode = $_POST['kode'];
$nama     = $_POST['nama'];
$NIM    = $_POST['NIM'];
$jurusan= $_POST['jurusan'];
$alamat   = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE mahasigma_table SET kode='$kode',nama='$nama', NIM='$NIM', jurusan='$jurusan',alamat='$alamat' WHERE kode='$kode'");


header("Location: index.php");
?>