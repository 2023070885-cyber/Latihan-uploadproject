<?php
$koneksi=mysqli_connect('localhost','root','mysql','mahasigma_form');

if(mysqli_connect_error()){

    echo 'koneksi database gagal : ' . mysqli_connect_error();
}
?>

