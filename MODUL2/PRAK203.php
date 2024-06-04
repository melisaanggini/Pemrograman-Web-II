<?php
$hasil;
$derajatSuhu;

if (isset($_POST["konversi"])){
    $nilaiFloat = floatval($_POST["nilai"]);
    if(isset($_POST["suhu"]) && isset($_POST["suhuKonversi"])){
        $nilaiFloat = $_POST["nilai"];
        if ($_POST["suhu"] == "Celcius"){
            if($_POST["suhuKonversi"] == "Celcius") {
                $hasil = $nilaiFloat;
                $derajatSuhu = "C";
            } else if ($_POST["suhuKonversi"] == "Fahrenheit"){
                $hasil = ($nilaiFloat * (9/5)) + 32;
                $derajatSuhu = "F";
            } else if ($_POST["suhuKonversi"] == "Rheamur"){
                $hasil = ($nilaiFloat * (4/5));
                $derajatSuhu = "R";
            } else if ($_POST["suhuKonversi"] == "Kelvin"){
                $hasil = ($nilaiFloat + 273.15);
                $derajatSuhu = "K";
            }
        } else if  ($_POST["suhu"] == "Fahrenheit"){
            if( $_POST["suhuKonversi"] == "Celcius"){
                $hasil = ($nilaiFloat - 32) * (5/9);
                $derajatSuhu = "C";
            } else if ($_POST["suhuKonversi"] == "Fahrenheit"){
                $hasil = $nilaiFloat;
                $derajatSuhu = "F";
            } else if ($_POST["suhuKonversi"] == "Rheamur"){
                $hasil = ((4/9) * ($nilaiFloat - 32));
                $derajatSuhu = "R";
            } else if ($_POST["suhuKonversi"] == "Kelvin"){
                $hasil =  (($nilaiFloat + 459.67) * (5/9));
                $derajatSuhu = "K";
            }
        } else if  ($_POST["suhu"] == "Rheamur"){
            if( $_POST["suhuKonversi"] == "Celcius"){
                $hasil = ($nilaiFloat / 0.8);
                $derajatSuhu = "C";
            } else if($_POST["suhuKonversi"] == "Fahrenheit"){
                $hasil = (($nilaiFloat * 2.25) + 32);
                $derajatSuhu = "F";
            } else if($_POST["suhuKonversi"] == "Rheamur"){
                $hasil = $nilaiFloat;
                $derajatSuhu = "R";
            } else if($_POST["suhuKonversi"] == "Kelvin"){
                $hasil = (($nilaiFloat / 0.8) + 273.15);
                $derajatSuhu = "K";
            }
        } else if  ($_POST["suhu"] == "Kelvin"){
            if( $_POST["suhuKonversi"] == "Celcius" ){
                $hasil = ($nilaiFloat - 273.15);
                $derajatSuhu = "C";
            } else if( $_POST["suhuKonversi"] == "Fahrenheit"){
                $hasil = ($nilaiFloat * (9/5) - 459.67);
                $derajatSuhu = "F";
            } else if( $_POST["suhuKonversi"] == "Rheamur"){
                $hasil = ((4/5) * ($nilaiFloat - 273));
                $derajatSuhu = "R";
            } else if( $_POST["suhuKonversi"] == "Kelvin"){
                $hasil = $nilaiFloat;
                $derajatSuhu = "K";
            }    
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
    <style>
        li {
            list-style: none;
        }
        .sh {
            display: block;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <li>
            <p>Output yang diinginkan</p>
        </li>
        <li>
            <p>Nilai : <input type="text" name="nilai" id="nilai" ></p>
        </li>
        <li class="sh">
            <p>Dari :</p>
            <p>
                <input type="radio" name = "suhu" value = "Celcius"> Celcius
            </p>
            <p>
                <input type="radio" name = "suhu" value = "Fahrenheit"> Fahrenheit
            </p>
            <p>
                <input type="radio" name = "suhu" value = "Rheamur"> Rheamur
            </p>
            <p>
                <input type="radio" name = "suhu" value = "Kelvin"> Kelvin
            </p>
        </li>
        <li class="sh">
            <p>Ke :</p>
            <p>
            <input type="radio" name="suhuKonversi" value="Celcius">Celcius
            </p>
            <p>
            <input type="radio" name="suhuKonversi" value="Fahrenheit">Fahrenheit
            </p>
            <p>
                <input type="radio" name = "suhuKonversi" value = "Rheamur"> Rheamur
            </p>
            <p>
                <input type="radio" name = "suhuKonversi" value = "Kelvin"> Kelvin
            </p>
        </li>
        <li>
            <button type="submit" name="konversi">Konversi</button>
        </li>
        <?php if (isset ($_POST ["konversi"])):?>
            <li>
                <h1>Hasil Konversi : <?= number_format($hasil, 1) . $derajatSuhu; ?></h1>
            </li>
        <?php endif ?>
        </form>
</body>
</html>