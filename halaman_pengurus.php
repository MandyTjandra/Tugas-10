<!DOCTYPE html>
<html>

<head>
    <title>Halaman Pengurus - Laporan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['level'] != "pengurus") {
        header("location:index.php?pesan=gagal");
    }
    include 'koneksi.php';
    ?>

    <div style="width: 80%; margin: 20px auto;">
        <h1>Dashboard Pengurus</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b>. Berikut adalah laporan stok barang saat ini.</p>
        <a href="logout.php" class="tombol_login" style="background: #ff4d4d; text-decoration: none;">LOGOUT</a>
        <br /><br />

        <h3>Laporan Stok Barang</h3>
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <tr style="background: #ddd;">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok Tersedia</th>
                <th>Valuasi Aset (Stok x Harga)</th>
            </tr>
            <?php
            $no = 1;
            $total_aset = 0;
            $data = mysqli_query($koneksi, "select * from barang");
            while ($d = mysqli_fetch_array($data)) {
                $aset = $d['stok'] * $d['harga'];
                $total_aset += $aset;
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_barang']; ?></td>
                    <td><?php echo $d['stok']; ?> unit</td>
                    <td>Rp. <?php echo number_format($aset); ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="3" align="right"><b>Total Nilai Aset Kantor</b></td>
                <td><b>Rp. <?php echo number_format($total_aset); ?></b></td>
            </tr>
        </table>
    </div>
</body>

</html>