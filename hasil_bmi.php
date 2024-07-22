<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
</head>
<body>
    
    <?php
        $nama = $_POST["nama"];
        $tinggi = $_POST["tinggi"] / 100;
        $berat = $_POST["berat"];

        $bmi = $berat / ($tinggi * $tinggi);
    ?>

    <h3>Nilai BMI kamu adalah :<?= $bmi ?></h3>

    <?php
        if($bmi < 18.5) {
            echo "Berat Badan Anda Kurang";
        } 
        elseif($bmi < 22.9) {
            echo "Berat Badan Anda Normal";
        }
        elseif($bmi < 29.9) {
            echo "Berat Badan Anda Berlebih";
        }
        else {
            echo "Berat Badan Anda Obesitas";
        }
    ?>

</body>
</html>