<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM produk WHERE id_barang = '".$_GET['id_barang']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman ubah barang</title>
</head>
<body>
    <h2>Ubah Barang</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Barang</a> <br><br>

    <form action="" method="POST">
    <table>
        <tr>
            <td>Id Barang</td>
            <td>:</td>
            <td><input type="text" name="id_barang" value="<?php echo $result['id_barang'] ?>" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $result['nama_barang'] ?>" required></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type="text" name="telp" value="<?php echo $result['telepon'] ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $result['alamat'] ?>" required></td>
        </tr>
        <tr>
            <td>Jenis Barang</td>
            <td>:</td>
            <td>
                <select name="jenis_barang">
                    <option value="<?php echo $result['jenis_barang'] ?>"><?php echo $result['jenis_barang'] ?></option>
                    <option value="Laptop">Laptop</option>
                    <option value="Handphone">Handphone</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="edit" value="simpan"></td>
        </tr>
    </table>
    </form>
    <?php 
    if (isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE produk SET id_barang = '".$_POST['id_barang']."',   nama_barang = '".$_POST['nama']."',
        telepon = '".$_POST['telp']."', alamat = '".$_POST['alamat']."', jenis_barang = '".$_POST['jenis_barang']."'
        WHERE id_barang ='".$_GET['id_barang']."'");
        if($update){
            echo 'Berhasil Edit';
        }else{
            echo 'Gagal Edit';
        }
    }
    ?>
</body>
</html>