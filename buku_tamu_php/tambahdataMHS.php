<!DOCTYPE html>
<html>
<head>
    <title>FORM INPUT DATA MAHASISWA</title>
</head>
<body>

    <h2>FORM INPUT DATA MAHASISWA</h2>
    <br/>
    <a href="tampildataMHS.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambahdataMHS_kirim.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>