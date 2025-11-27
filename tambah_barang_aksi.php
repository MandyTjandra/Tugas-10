<?php
include 'koneksi.php';
$nama = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "insert into barang values('','$nama','$stok','$harga')");
header("location:halaman_pegawai.php");
?>