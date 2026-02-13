<?php 
include "koneksi.php"; 

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $hobi  = $_POST['hobi'];
    $pesan  = $_POST['pesan'];
      
    $sql = "INSERT INTO DATA_MAHASISWA (nama, alamat, no_tlp,hobi, pesan) 
            VALUES ('$nama', '$alamat', '$no_tlp', '$hobi','$pesan')";

    if (mysqli_query($koneksi, $sql)) {
        // Jika sukses, muncul alert dan pindah ke output
        echo "<script>alert('Data Berhasil Disimpan!'); window.location='outbukmu.php';</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DAFTAR MAHASISWA</title>
    <style>
        label { display: inline-block; width: 100px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <a href="outbukmu.php">Lihat Data Mahasiswa</a>
    <hr>

    <form action="" method="POST">
        <label>Nama</label> : <input type="text" name="nama" placeholder="Masukkan Nama" required><br>
        <label>Alamat</label> : <input type="text" name="alamat" placeholder="Masukkan Alamat" required><br>
        <label>Nomor Tlp</label> : <input type="text" name="no_tlp" placeholder="Contoh: 0812..."><br>
        <label>HOBI </label> : <input type="text" name="hobi" placeholder="contoh :game"><br>
        <label>Pesan</label> : <input type="text" name="pesan" placeholder="Isi Pesan..."><br>
        
        <br>
        <button type="submit" name="simpan">Simpan Data</button>
        <button type="reset" name="ulang">Kosongkan</button>
    </form>
</body>
</html>