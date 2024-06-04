<?php
    $smartphoneList = array ("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Style CSS-->
    <style>
        table {
            font-family: times-new-roman;
            color: #232323;
        }
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <!--Membuat Table -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <!-- Mmbuat Foreach-->
        <?php
            foreach($smartphoneList as $sl):
        ?>
        <tr>
            <td><?php echo $sl; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>