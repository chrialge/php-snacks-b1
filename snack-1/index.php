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
        'home_team' => 'Bergamo',
        'guest_team' => 'Livorno',
        'home_score_team' => 60,
        'guest_score_team' => 40,
    ],
    [
        'home_team' => 'Cesena',
        'guest_team' => 'Palermo',
        'home_score_team' => 75,
        'guest_score_team' => 67,
    ],
    [
        'home_team' => 'Torino',
        'guest_team' => 'Firenzw',
        'home_score_team' => 90,
        'guest_score_team' => 70,
    ],
    [
        'home_team' => 'Venezia',
        'guest_team' => 'Cagliari',
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

    <?php foreach ($matches as $match) : ?>

        <p>
            <?= $match['home_team'] ?> - <?= $match['guest_team'] ?> | <?= $match['home_score_team'] ?>-<?= $match['guest_score_team'] ?>
        </p>

    <?php endforeach; ?>
</body>

</html>