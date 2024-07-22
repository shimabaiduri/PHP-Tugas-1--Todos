<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Luas Segitiga</title>
</head>
<body>
    <?php
        $tinggi = $_POST["tinggi"];
        $alas = $_POST["alas"];
        $sisi1 = $_POST["sisi1"];
        $sisi2 = $_POST["sisi2"];

        function luas($t, $a) {
            $luas = 0.5 * $t * $a;
            echo "<h3>Luas Segitiga dengan tinggi $t cm dan dengan alas $a cm adalah $luas</h3>";
            echo "<br>";
        }

        function keliling($a, $s1, $s2) {
            $keliling = $a + $s1 + $s2;
            echo "<h3>Keliling Segitiga dengan sisi $a cm , $s1 cm , dan $s2 cm adalah $keliling</h3>";
            echo "<br>";
        }

        luas($tinggi, $alas);
        keliling($alas, $sisi1, $sisi2);
    ?>
</body>
</html>