<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Luas Lingkaran</title>
</head>
<body>
    <?php
        $jari2 = $_POST["jari2"];

        function luas($r) {
            $luas = 3.14 * $r * $r;
            echo "<h3>Luas Segitiga dengan jari jari $r cm adalah $luas</h3>";
            echo "<br>";
        }

        function keliling($r) {
            $keliling = 3.14 * $r * 2;
            echo "<h3>keliling Segitiga dengan jari jari $r cm adalah $keliling</h3>";
            echo "<br>";
        }

        luas($jari2);
        keliling($jari2);
    ?>
</body>
</html>