<?php 
include 'koneksi.php';
if(isset($_GET['id_barang'])){
    $delete = mysqli_query($conn, "DELETE FROM  produk WHERE id_barang = '".$_GET['id_barang']."' " );
    header('location:index.php');
}
?>