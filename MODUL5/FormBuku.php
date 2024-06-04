<?php 
    require('Model.php');

    if (isset($_GET['id_buku'])) {
        editbuku();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            vertical-align: top;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <h2>Form Buku</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_buku']) ) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($conn, $sql);

            foreach($result as $res) :
    ?>
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value=\"" . $res["id_buku"] . "\"" : "value='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value=\"" . $res["judul_buku"] . "\"" : "value='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Nama Penulis</td>
            <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value=\"" . $res["penulis"] . "\"" : "value='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value=\"" . $res["penerbit"] . "\"" : "value='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value=\"" . $res["tahun_terbit"] . "\"" : "value='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td colspan="2">
            <?php 
                if (isset($_GET['id_buku'])) {
                    echo "<button type=\"submit\" name=\"update\">Edit</button>";
                }
                else {
                    echo "<button type=\"submit\" name=\"submit\">Tambah</button>";   
                }
            ?>
            </td>
        </tr>
    </table>
    <?php
        endforeach; 
    } else {
    ?>
    <table>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="id_buku" required> <br></td>
        </tr>
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="judul" required> <br></td>
        </tr>
        <tr>
            <td>Nama Penulis</td>
            <td><input type="text" name="penulis" required> <br></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" required> <br></td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="thnterbit" required> <br></td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                if (isset($_GET['id_buku'])) {
                    echo "<button type=\"submit\" name=\"update\">Edit</button>";
                }
                else {
                    echo "<button type=\"submit\" name=\"submit\">Tambah</button>"; 
                }
                ?>
            </td>
        </tr>
    </table>
    <?php } ?> 
    </form>
    <br>
    <div style="text-align: center;">
        <a href="Buku.php" class="back-button">Kembali</a>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            tambahBuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
        }
        if (isset($_POST['update'])) {
            updateBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
        }
    ?>
</body>
</html>