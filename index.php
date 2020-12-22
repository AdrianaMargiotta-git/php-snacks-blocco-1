<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks 2</title>

    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: #00FFFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        p{
            color: #CCFF00;
            font-size:2rem;
        }
    </style>

</head>
<body>
    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <?php

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        $nameV = strlen($name) > 3 == true;
        $mailV = (strpos ($mail, '@') !== false && strpos ($mail, '.') !== false) == true;
        $ageV = is_numeric($age) == true;

    ?>

    <p>Il nome che hai inserito è: <?php echo $name ?></p>
    <p>La mail che hai inserito è: <?php echo $mail ?></p>
    <p>L'età che hai inserito è: <?php echo $age ?></p>

    <?php
        if (strlen($name) > 3 && strpos ($mail, '@') !== false && strpos ($mail, '.') !== false && is_numeric($age) == true) {
            echo "<h1 style='font-size:4rem;color:green;'>Accesso consentito</h1>";
        } else {
            echo "<h1 style='font-size:4rem;color:red;'>Accesso negato</h1>";
        }
    ?>
    
</body>
</html>