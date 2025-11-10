<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="styleupdate.css">
</head>
<body>
    <a href="index.php" style='font-size: 50px;'>KEMBALI</a>
    
    <h1 style="text-align: center;color: white;font-size: 50px;" >EDIT DATA SISWA</h1>

    <?php
    include 'koneksi.php';
    $kode = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM mahasigma_table WHERE kode='$kode'");
    while($d = mysqli_fetch_array($data)){
    ?>
         <form method="post" action="ubah.php">
            <table style="margin: 0 auto; width: 60%; font-size: 18px;color: white;">
                
                 <tr>
                     <td>kode</td>
                     <td><input type="text" name="kode" value="<?php echo $d['kode']; ?>"></td>
                 </tr>


                 <tr>            
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                 </tr>

                 <tr>
                    <td>NIM</td>
                    <td><input type="number" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
                 </tr>

                 <tr>
                    <td>jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                 </tr>

                 <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                 </tr>

                 <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SIMPAN">
                      
                    </td>
                 </tr>                
            </table>
        </form>
    <?php 
    }
    ?>

</body>
</html>