<?php

require_once __DIR__ . '/components/Accessorio.php';
require_once __DIR__ . '/components/Gioco.php';
require_once __DIR__ . '/components/Cibo.php';

$topino = new Gioco('Topini di peluche Trixie', 4.99, ['Gatto'], 'Morbido con codina corta', '8,5 cm x 10 cm');

$voliera = new Accessorio('legno', 'M:L83 x P67 x H153', 'Voliera Wilma in Legno', 184.99, ['Uccello']);

$ciboCane = new cibo(['prosciutto', 'riso'], 'Royal Canin', 43.99, ['cane'], null, '545g');
var_dump($ciboCane, $topino, $voliera);

$prodotti = [$ciboCane, $topino, $voliera];

function getIngr() {

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B commerce!</title>
</head>
<body>
    <h1>B-Commerce!</h1>

    <?php foreach( $prodotti as $item ) : ?>
    <div>
        <!-- nome prodotto -->
        <h3><?php echo $item->nome ?></h3>
        <!-- categoria -->
        <div>
           <?php foreach ($item-> ingredienti as $ingrediente) echo $ingrediente?>
        </div>
        
        <!-- prezzo prodotto -->
        <h3><?php echo $item->prezzo ?></h3>

        
    
        <?php endforeach; //endforeach;?>
    </div>
    

</body>
</html>
<?php ?>
