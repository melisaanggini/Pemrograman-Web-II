<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid;
            width:50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang: <input type="text" name= "panjang"> <br>
        Lebar: <input type="text" name= "lebar"> <br>
        Nilai: <input type="text" name= "nilai"> <br>
        <input type="submit" name= "cetak" value= "Cetak">
    </form>
    <br>
    <?php
        $panjang = $lebar = $nilai = "";
        if(isset($_POST['cetak'])){ 
            if(isset($_POST['panjang'])) {
                $panjang = $_POST['panjang'];
            }
            if(isset($_POST['lebar'])) {
                $lebar = $_POST['lebar'];
            }
            if(isset($_POST['nilai'])) {
                $nilai = (String)$_POST['nilai'];
            }
            $a = explode (" ", $nilai);
            if($panjang * $lebar < count($a)){
                echo "Panjang nilai tidak sesuai dengan ukuran matrix";
            } else { ?>
                <table cellspacing="0" cellpadding ="0">
                    <?php
                        for($i = 0 ; $i < $panjang;$i++){
                    ?>
                    <tr>
                    <?php for($j=0 ;$j<$lebar;$j++){ ?>
                        <td style="text-align: center;">
                        <?php
                            if(empty($a[($i*$panjang)+$j])){
                                echo 0;
                            } else {
                                echo $a[($i*$panjang)+$j];
                            }
                        ?>
                    </td>
                <?php } ?>
                </tr>
                <?php } ?>
                </table>
        <?php
                }
        }
        ?>
</body>
</html> 