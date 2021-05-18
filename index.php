<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>

<?php
/* PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        'squadra_casa' => 'Bologna',
        'squadra_ospite' => 'Milano',
        'punti_casa' => 60,
        'punti_ospite' => 85
    ],
    [
        'squadra_casa' => 'Varese',
        'squadra_ospite' => 'Venezia',
        'punti_casa' => 42,
        'punti_ospite' => 76
    ],
    [
        'squadra_casa' => 'Pesaro',
        'squadra_ospite' => 'Sassari',
        'punti_casa' => 89,
        'punti_ospite' => 51
    ],
    [
        'squadra_casa' => 'Brescia',
        'squadra_ospite' => 'Cremona',
        'punti_casa' => 97,
        'punti_ospite' => 74
    ],
    [
        'squadra_casa' => 'Roma',
        'squadra_ospite' => 'Caserta',
        'punti_casa' => 62,
        'punti_ospite' => 93
    ],
];

var_dump ($matches);

?>

<h2>Risultati partite:</h2>

<?php for( $i = 0; $i < count($matches); $i++) { ?>

    <ul>
        <li>
            <p><?php echo( $matches[$i]['squadra_casa']
                    .' - '
                    .$matches[$i]['squadra_ospite']
                    .' | '
                    .$matches[$i]['punti_casa']
                    .' - '
                    .$matches[$i]['punti_ospite']);                                          
                ?>
            </p>
        </li>
    </ul>

<?php } ?>
 
</body>
</html>