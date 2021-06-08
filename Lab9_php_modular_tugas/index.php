<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result =mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta caharset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="content">
        <h1>Data Barang</h1>
        <br/>
	    <a class="tombol" href="tambah.php">+ Tambah Data Baru</a>
        <div class="main">
            <table border="1" class="table">
            <tr>
                <th>gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            </tr>
                <td><img src="gambar/<?=$row['gambar'];?>" alt=<?=$row['nama'];?>"></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= $row['harga_beli'];?></td>
                <td><?= $row['harga_jual'];?></td>
                <td><?= $row['stok'];?></td>
                <td>
                    <a class="edit" href="ubah.php?id=<?php echo $row['id_barang']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $row['id_barang']; ?>">Hapus</a>					
			    </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>