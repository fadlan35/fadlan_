<?php 
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM DATA_MAHASISWA"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar MAHASISWA</title>
</head>
<body>
    <h2>DATA MAHASISWA</h2>
    <a href="bukuTamu1.php">TAMBAH Data</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr bgcolor="yellow">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor Tlp</th>
            <th>Hobi</th>
            <th>Pesan</th>
        </tr>
        
        <?php
        $no = 1;
        // Pakai mysqli_fetch_array
        while ($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['no_tlp']; ?></td> 
            <td><?php echo $data['hobi']; ?></td>
            <td><?php echo $data['pesan']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>