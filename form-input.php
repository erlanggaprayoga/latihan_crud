<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Barang</title>
</head>
<body>
    <h2>Input Barang </h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Barang</a> <br><br>

    <form action="" method="POST">
    <table>
        <tr>
            <td>id barang</td>
            <td>:</td>
            <td><input type="text" name="id_barang" placeholder="id_barang" required></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="nama barang" required></td>
        </tr>
        <tr>
            <td>Harga Barang (Rp)</td>
            <td>:</td>
            <td><input type="text" name="harga" placeholder="harga" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" placeholder="alamat" required></td>
        </tr>
        <tr>
            <td>Jenis Barang</td>
            <td>:</td>
            <td>
                <select name="jenis_barang">
                    <option value="Laptop">Laptop</option>
                    <option value="Handphone">Handphone</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
    </table>
    </form>
    <?php 
    include 'koneksi.php';
    if (isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO produk VALUES
                            ('".$_POST['id_barang']."',
                            '".$_POST['nama']."',
                            '".$_POST['harga']."',
                            '".$_POST['alamat']."',
                            '".$_POST['jenis_barang']."')");
        if($insert){
            echo 'berhasil disimpan';
        }else{
            echo 'gagal disimpan' .mysqli_error($conn);
        }
    }
    ?>
</body>
</html>