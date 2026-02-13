<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Mahasiswa</title>
</head>
<body>

    <h2>DATA MAHASISWA</h2>
    <br/>
    <a href="tambahdataMHS.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        
        
        $sql  = "SELECT * FROM data_mahasiswa1"; 
        $data = mysqli_query($koneksi, $sql);
        
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="editdataMHS.php?id=<?php echo $d['id']; ?>">EDIT</a> | 
                    <a href="hapusdataMHS.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin hapus data?')">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>