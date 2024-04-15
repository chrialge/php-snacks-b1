<?php

/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
 */

$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'guest_team' => 'Milano',
        'home_score_team' => 50,
        'guest_score_team' => 60,
    ],
    [
        'squad_home' => 'Bergamo',
        'squad_trasfert' => 'Livorno',
        'home_score_team' => 60,
        'guest_score_team' => 40,
    ],
    [
        'squad_home' => 'Cesena',
        'squad_trasfert' => 'Palermo',
        'home_score_team' => 75,
        'guest_score_team' => 67,
    ],
    [
        'squad_home' => 'Torino',
        'squad_trasfert' => 'Firenzw',
        'home_score_team' => 90,
        'guest_score_team' => 70,
    ],
    [
        'squad_home' => 'Venezia',
        'squad_trasfert' => 'Cagliari',
        'home_score_team' => 40,
        'guest_score_team' => 55,
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($mathes as $match) : ?>

        <p>
            <?= $match['home_team'] ?> - <?= $match['guest_team'] ?> | <?= $match['home_score_team'] ?> - <?= $match['guest_score_team'] ?>
        </p>

    <?php endforeach; ?>
</body>

</html>