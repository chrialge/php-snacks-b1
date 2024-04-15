<?php

/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

var_dump($name, $email, $age);

if (strlen($name) > 3 and str_contains($email, '@') and str_contains($email, '.')) {
    echo 'Accesso Riuscito';
} else {
    echo 'accesso negato';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="get">
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="number" name="age" id="age">
        <button type="submit">click me!</button>
    </form>

</body>

</html>