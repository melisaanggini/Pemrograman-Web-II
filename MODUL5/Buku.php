<?php
    require('Model.php');
    if (isset($_GET['id_buku'])){
        hapusBuku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpus</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f0f2f5;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007BFF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        td {
            background-color: #E8E8E8;
            color: #333;
        }

        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }

        tr:hover td {
            background-color: #d1e7ff;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Buku</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                tampilBuku();
            ?>
        </tbody>
    </table>
    <a href="FormBuku.php"><button>Tambah Buku</button></a>
</body>
</html>
