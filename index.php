<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>

<h2>Snack 1</h2>
<?php
/*  PHP Snack 1:
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

//var_dump ($matches);

?>

<h3>Risultati partite:</h3>

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



<h2>Snack 2</h2>
<?php
/*  PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age= $_GET['age'];

if ( strlen($name) <= 3 ) {
    echo 'Accesso negato!';
} 
elseif ( empty($mail) || strpos($mail, '@') === false || strpos($mail, '.') === false ) {
    echo 'Accesso negato!';
} 
elseif ( is_numeric($age) === false ) {
    echo 'Accesso negato!';
} 
else {
    echo 'Accesso riuscito!';
}

?>



<h2>Snack 3</h2>
<?php
/*  PHP Snack 3 Bonus 
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

$random = [];

for ( $i = 0; $i < 15; $i++ ) {
    echo rand(0,100)."<br />";
}

?>

</body>
</html>