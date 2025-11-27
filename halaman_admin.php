<!DOCTYPE html>
<html>

<head>
    <title>Halaman Admin - Kelola User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['level'] != "admin") {
        header("location:index.php?pesan=gagal");
    }
    include 'koneksi.php';
    ?>

    <div style="width: 80%; margin: 20px auto;">
        <h1>Dashboard Admin</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b>. Anda memiliki akses penuh mengelola User.</p>
        <a href="logout.php" class="tombol_login" style="background: #ff4d4d; text-decoration: none;">LOGOUT</a>
        <br /><br />

        <h3>Daftar Pengguna Sistem</h3>
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <tr style="background: #ddd;">
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Level</th>
            </tr>
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "select * from user");
            while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['level']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <br />
        <h3>Tambah User Baru</h3>
        <form action="tambah_user_aksi.php" method="post"
            style="background: #fff; padding: 20px; border: 1px solid #ccc;">
            <label>Nama Lengkap</label><br>
            <input type="text" name="nama" required><br><br>
            <label>Username</label><br>
            <input type="text" name="username" required><br><br>
            <label>Password</label><br>
            <input type="text" name="password" required><br><br>
            <label>Level</label><br>
            <select name="level">
                <option value="admin">Admin</option>
                <option value="pegawai">Pegawai</option>
                <option value="pengurus">Pengurus</option>
            </select><br><br>
            <input type="submit" value="Simpan User">
        </form>
    </div>
</body>

</html>