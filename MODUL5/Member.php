<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Perpustakaan</title>
    <style>
        body {
            max-width: 900px;
            margin: auto;
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
        }

        .title {
            text-align: center;
        }

        .member-table {
            width: 100%;
            border-collapse: collapse;
        }

        .member-table th,
        .member-table td {
            border: 1px solid #000;
            padding: 8px;
        }

        .member-table th {
            background-color: #a0a0a0;
        }

        .member-table td {
            background-color: #E8E8E8;
        }

        .add-member-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-member-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Member</h2>
        <table class="member-table">
            <thead>
                <tr>
                    <th>ID Member</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('Model.php');

                    if (isset($_GET['id_member'])) {
                        hapusMember($_GET['id_member']);
                    }

                    tampilMember();
                ?>
            </tbody>
        </table>
        <br>
        <a href="FormMember.php" class="add-member-btn">Tambah Member</a>
    </div>
</body>
</html>
