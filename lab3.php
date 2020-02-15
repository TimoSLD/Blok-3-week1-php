<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    //random rekenmachine.
        $getal1 = mt_rand(1,10);
        $getal2 = mt_rand(1,10);
        $keer = $getal1 * $getal2;
        $delen = $getal1 / $getal2;
        $plus = $getal1 + $getal2;
        $min = $getal1 - $getal2;

        echo $getal1 . '*' . $getal2 . '=' . $keer;
        echo '<br>';
        echo $getal1 . ':' . $getal2 . '=' . $delen;
        echo '<br>';
        echo $getal1 .'+' . $getal2 . '=' . $plus;
        echo '<br>';
        echo $getal1 . '-' . $getal2 . '=' . $min;
        echo '<br>';
        echo '<h1>lab3B</h1>';
        echo '<br>';
        //tafel van 6.
        for($i = 0; $i <= 10; $i++){
            $totaal = 6 * $i;
            echo $i . '*' . $totaal;
            echo '<br>';
        }
        $i = 6;
        tafel6();
        function tafel6($hoi){
            for($hoi = 0; $a <= 10; $a++){
                echo $i . '*' . $a;
                echo '<br>';   
            }
        }
   ?> 
</body>
</html>