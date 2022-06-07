<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan HP dan Laptop</title>
</head>
<body>
    <h2>Penjualan Barang</h2>
    <a href="form-input.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Tambah barang</a> <br><br>
    <table border="1" cellspacing="0" width="50%" >
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <td>No</td>
            <td>Id Barang</td>
            <td>Nama Barang</td>
            <td>Telepon</td>
            <td>Alamat</td>
            <td>Jenis barang</td>
            <td>Opsi</td>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $select = mysqli_query($conn, 'SELECT * FROM produk');
        if (mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil['id_barang'] ?></td>
            <td><?php echo $hasil['nama_barang'] ?></td>
            <td><?php echo $hasil['telepon'] ?></td>
            <td><?php echo $hasil['alamat'] ?></td>
            <td><?php echo $hasil['jenis_barang'] ?></td>
            <td>
                <a href="form-edit.php?id_barang=<?php echo $hasil['id_barang'] ?>">edit</a> ||
                <a href="delete.php?id_barang=<?php echo $hasil['id_barang'] ?>">hapus</a>
        </td>
        </tr>
        <?php } }else{ ?>
        <tr>
            <td colspan="7" align="center">Data Kosong</td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>