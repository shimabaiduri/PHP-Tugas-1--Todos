<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi Panjang</title>
</head>
<body>
    <?php
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];

        function luas($p, $l) {
            $luas = $p * $l;
            echo "<h3>Luas persegi panjang dengan panjang $p cm dan dengan lebar $l cm adalah $luas</h3>";
            echo "<br>";
        }

        function keliling($p, $l) {
            $keliling = 2 * ($p * $l);
            echo "<h3>Keliling persegi panjang dengan panjang $p cm dan dengan lebar $l cm adalah $keliling</h3>";
            echo "<br>";
        }

        luas($panjang, $lebar);
        keliling($panjang, $lebar);
    ?>
</body>
</html>