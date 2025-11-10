<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="styleINDEX.css">
</head>

<body style="text-align: center;" background="bg1.png">
    <h1 style='font-size: 50px;'>DATA MAHASIGMA</h1>

<a href="tambah.php" style='font-size: 35px;'>+ TAMBAH SISWA</a>
<br/>
<br/>
<div style="text-align: center;">
    <table border="3" style="margin: 0 auto; width: 80%; font-size: 35px; border-collapse: collapse;" style="border: 3px solid black;">
    <tr> 
        <th style='color: crimson;'>No</th>
        <th style='color: yellow;'>Kode</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>OPSI</th>
    </tr>
</div>

    <?php
    include 'koneksi.php';
    $no = 1;
    $mahasigma_form = mysqli_query($koneksi, "select * from mahasigma_table");
    while($d = mysqli_fetch_array($mahasigma_form)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['NIM']; ?></td>
            <td><?php echo $d['jurusan']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['kode']; ?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d['kode']; ?>">DELETE</a>
            </td>
        </tr>
        <?php 
    }
    ?>

</body>
</html>