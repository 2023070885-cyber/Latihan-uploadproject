<?php

include 'koneksi.php';

$kode = $_GET['id'];
mysqli_query($koneksi, "delete from mahasigma_table where kode='$kode'");


header("Location: index.php");
?>