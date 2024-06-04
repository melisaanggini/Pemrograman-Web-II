<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <form action="" method ="post">
        <label for="jumlah">Tinggi</label>
        <input type="text" name="jumlah"><br>
        <label for="alamat">Alamat Gambar :</label>
        <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
        if (isset ($_POST ['submit'])){
            $max = $_POST['jumlah'];
            $i = 1; $j = 1; $k = $max;
            $gambar = $_POST['alamat'];
        }
    ?>
    <?php if( isset($_POST['submit']) ) : ?>
        <?php while($i <= $max) { ?>
            <?php while($j < $i ) { ?>
                <img style="width: 25px; opacity: 0;" src=<?= "$gambar"; ?> alt="">
                <?php $j = $j + 1; ?>
            <?php } ?>
            <?php while($k >= $i) { ?>
                <img style="width : 25px" src=<?= "$gambar"; ?> alt="">
                <?php $k = $k - 1; ?>
            <?php } ?>
            <br>
            <?php
                $j = 1; $k = $max;
                $i = $i + 1;
            ?>
            <?php } ?>
        <?php endif; ?>
</body>
</html>