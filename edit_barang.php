<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    session_start();
    // Cek apakah user adalah pegawai
    if ($_SESSION['level'] != "pegawai") {
        header("location:index.php?pesan=gagal");
    }
    include 'koneksi.php';
    ?>

    <div class="kotak_login" style="width: 400px;">
        <p class="tulisan_login">Edit Data Barang</p>

        <?php
        // Menangkap id yang dikirim dari url
        $id = $_GET['id'];

        // Mengambil data barang yang memiliki id tersebut
        $data = mysqli_query($koneksi, "select * from barang where id='$id'");

        // Mengubah data menjadi array agar bisa ditampilkan
        while ($d = mysqli_fetch_array($data)) {
            ?>

            <form action="update_barang.php" method="post">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form_login" value="<?php echo $d['nama_barang']; ?>" required>

                <label>Stok</label>
                <input type="number" name="stok" class="form_login" value="<?php echo $d['stok']; ?>" required>

                <label>Harga</label>
                <input type="number" name="harga" class="form_login" value="<?php echo $d['harga']; ?>" required>

                <input type="submit" class="tombol_login" value="UPDATE DATA">
                <br /><br />
                <center>
                    <a href="halaman_pegawai.php">Kembali</a>
                </center>
            </form>

        <?php
        }
        ?>

    </div>
</body>

</html>