<?php
require('Model.php');

// Memanggil fungsi editPeminjaman jika id_peminjaman telah diset
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>" : "<title>Tambah Data Peminjaman</title>"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="date"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #4caf50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo (isset($_GET['id_peminjaman'])) ? "Edit Data Peminjaman" : "Tambah Data Peminjaman"; ?></h2>
        <form action="" method="post">
            <?php
            if (isset($_GET['id_peminjaman'])) {
                $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
                $result = mysqli_query($conn, $sql);

                foreach ($result as $res) :
            ?>
            <table>
                <tr>
                    <td>ID Peminjaman</td>
                    <td><input type="text" name="id_Peminjaman" value="<?php echo $res["id_peminjaman"]; ?>" required></td>
                </tr>
                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td><input type="date" name="pinjam" value="<?php echo $res["tgl_pinjam"]; ?>" required></td>
                </tr>
                <tr>
                    <td>Tanggal Kembalian</td>
                    <td><input type="date" name="kembali" value="<?php echo $res["tgl_kembali"]; ?>" required></td>
                </tr>
                <tr>
                    <td>ID Buku</td>
                    <td>
                        <select name="id_buku">
                            <?php
                            $buku = tampilIdBuku();
                            foreach ($buku as $bk) :
                            ?>
                            <option value="<?= $bk['id_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ID Member</td>
                    <td>
                        <select name="id_member">
                            <?php
                            $member = tampilIdMember();
                            foreach ($member as $mb) :
                            ?>
                            <option value="<?= $mb['id_member']; ?>"><?= $mb['nama_member']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="update">Edit</button></td>
                </tr>
            </table>
            <?php
                endforeach;
            } else {
            ?>
            <table>
                <tr>
                    <td>ID Peminjaman</td>
                    <td><input type="text" name="id_Peminjaman" required></td>
                </tr>
                <tr>
                    <td>Tanggal Peminjaman</td>
                    <td><input type="date" name="pinjam" required></td>
                </tr>
                <tr>
                    <td>Tanggal Kembalian</td>
                    <td><input type="date" name="kembali" required></td>
                </tr>
                <tr>
                    <td>ID Buku</td>
                    <td>
                        <select name="id_buku">
                            <?php
                            $buku = tampilIdBuku();
                            foreach ($buku as $bk) :
                            ?>
                            <option value="<?= $bk['id_buku']; ?>"><?= $bk['judul_buku']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>ID Member</td>
                    <td>
                        <select name="id_member">
                            <?php
                            $member = tampilIdMember();
                            foreach ($member as $mb) :
                            ?>
                            <option value="<?= $mb['id_member']; ?>"><?= $mb['nama_member']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Tambah</button></td>
                </tr>
            </table>
            <?php } ?>
        </form>
        <br>
        <a href="Peminjaman.php">Kembali</a>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'], $_POST['pinjam'], $_POST['kembali'], $_POST['id_buku'], $_POST['id_member']);
    }
    if (isset($_POST['update'])) {
        updatepeminjaman($_POST['id_Peminjaman'], $_POST['pinjam'], $_POST['kembali']);
    }
    ?>
</body>
</html>
