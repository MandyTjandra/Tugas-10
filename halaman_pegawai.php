<!DOCTYPE html>
<html>

<head>
    <title>Halaman Pegawai - Inventaris</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Sedikit tambahan CSS agar tabel lebih rapi */
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px #d6d6d6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-edit {
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-hapus {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-logout {
            background: #ff4d4d;
            text-decoration: none;
            padding: 10px 20px;
            color: white;
            border-radius: 3px;
            float: right;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    // 1. Cek apakah user yang akses halaman ini sudah login dan levelnya 'pegawai'
    if ($_SESSION['level'] != "pegawai") {
        header("location:index.php?pesan=gagal");
    }

    // 2. Hubungkan ke database
    include 'koneksi.php';
    ?>

    <div class="container">
        <a href="logout.php" class="btn-logout">LOGOUT</a>
        <h1>Dashboard Pegawai</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b>. Berikut adalah daftar inventaris barang.</p>
        <hr>

        <h3>Data Inventaris Barang</h3>
        <table>
            <tr>
                <th width="5%">No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
                <th width="15%">Opsi</th>
            </tr>
            <?php
            $no = 1;
            // Mengambil data dari database tabel barang
            $data = mysqli_query($koneksi, "select * from barang");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_barang']; ?></td>
                    <td><?php echo $d['stok']; ?> unit</td>
                    <td>Rp. <?php echo number_format($d['harga']); ?></td>
                    <td>
                        <a href="edit_barang.php?id=<?php echo $d['id']; ?>" class="btn-edit">Edit</a>
                        |
                        <a href="hapus_barang.php?id=<?php echo $d['id']; ?>" class="btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

        <br />
        <hr>

        <h3>Input Barang Baru</h3>
        <form action="tambah_barang_aksi.php" method="post">

            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form_login" placeholder="Contoh: Laptop Acer..." required>

            <label>Stok Awal</label>
            <input type="number" name="stok" class="form_login" placeholder="Jumlah stok..." required>

            <label>Harga Satuan</label>
            <input type="number" name="harga" class="form_login" placeholder="Harga per unit..." required>

            <input type="submit" class="tombol_login" value="SIMPAN BARANG">
        </form>
    </div>

</body>

</html>