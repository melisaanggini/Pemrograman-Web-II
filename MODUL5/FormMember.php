<?php 
    require('Model.php');

    if (isset($_GET['id_member'])) {
    editMember();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php
        echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>":"<title>Tambah Member</title>"
    ?>
    <title>Tambah Member</title>
</head>
<body>
    <h2>Form Member</h2>
    <form action="" method="post">
    <?php

        if( isset($_GET['id_member']) ) {
        $sql = "SELECT * FROM member WHERE id_member = " . $_GET['id_member'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>

    <table>
        <tr>
            <td>ID Member</td>
            <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ? "value = " . $res["id_member"] . "" : "value = ''"; ?> required> <br></td>
        </tr>
        <tr>
            <td>Nama Member</td>
            <td><input type="text" name="Nama" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["nama_member"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Nomor Member</td>
            <td><input type="text" name="nomor" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["nomor_member"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["alamat"] . "" : "value = '' ";?> required> <br></td> 
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td><input type="datetime-local" name="daftar" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["tgl_mendaftar"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Tanggal bayar Terakhir</td>
            <td><input type="date" name="bayar" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["tgl_terakhir_bayar"] . "" :"value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>
                <?php
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\"name=\"update\">Edit</button>";
                    } 
                    else {
                        echo "<button type=\"submit\"name=\"submit\">Tambah</button>";
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
            <td>ID Member</td>
            <td><input type="text" name="id_member" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["id_member"] . "" : "value = ''"; ?> required> <br></td>
        </tr>
        <tr>
            <td>Nama Member</td>
            <td><input type="text" name="Nama" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["nama_member"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Nomor Member</td>
            <td><input type="text" name="nomor" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["nomor_member"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["alamat"] . "" : "value = '' ";?> required> <br></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td><input type="datetime-local" name="daftar" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["tgl_mendaftar"] . "" : "value ='' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>Tanggal bayar Terakhir</td>
            <td><input type="date" name="bayar" <?php echo(isset($_GET['id_member'])) ? "value = " . $res["tgl_terakhir_bayar"] . "" :"value = '' "; ?> required> <br></td>
        </tr>
        <tr>
            <td>
                <?php
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\"name=\"update\">Edit</button>";
                    }
                    else {
                        echo "<button type=\"submit\"name=\"submit\">Tambah</button>";
                    }
                ?>   
            </td>
        </tr>
    </table>
    <?php } ?>
    </form>
    <br>
    <a href="Member.php">Kembali</a>

    <?php
        if (isset($_POST['submit'])) {
            tambahMember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'],$_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
        }
        if (isset($_POST['update'])) {
            updateMember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'],$_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
        }
    ?>

</body>
</html>