<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks 2</title>
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

    ?>

    <?php

        if (strlen($name) > 3) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        };

        if (strpos ($mail, '@') !== false && strpos ($mail, '.') !== false) {
            echo 'OK';
        } else {
            echo 'KO';
        };

        if (is_numeric($age) == true) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
        
        

    ?>
    
</body>
</html>