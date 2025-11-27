<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form edit
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

// update data ke database
mysqli_query($koneksi, "update barang set nama_barang='$nama_barang', stok='$stok', harga='$harga' where id='$id'");

// mengalihkan halaman kembali ke halaman pegawai
header("location:halaman_pegawai.php");

?>