<?php 
// Menghubungkan koneksi database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// Memasukkan data ke tabel data_mahasiswa1
// Kosongkan bagian awal ('') jika kolom ID kamu Auto Increment
$sql = "INSERT INTO data_mahasiswa1 (nama, nim, alamat) VALUES ('$nama', '$nim', '$alamat')";
$query = mysqli_query($koneksi, $sql);

// Mengalihkan halaman kembali ke tampildataMHS.php
if($query){
    header("location:tampildataMHS.php");
} else {
    echo "Gagal input data: " . mysqli_error($koneksi);
}
?>