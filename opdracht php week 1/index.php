<?php
        $date = date('H:i');
        $state = '';
        $greet = '';
        

        if ($date >= 6 && $date < 12) {
            $state = "morning";
            $greet = 'Goede morgen';
        } elseif ($date >= 12 && $date < 18) {
            $state = "afternoon";
            $greet = 'Goede middag';
        } elseif ($date >= 18 && $date < 0) {
            $state = "evening";
            $greet = 'Goede avond';
        } elseif ($date >= 0 && $date < 6) {
            $state = "night";
            $greet = 'Goede nacht';
        }
    echo $greet .'<br>'; 
    echo 'het is ' . $date;
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id= "<?=$state;?>">
</div>
</body>
</html>