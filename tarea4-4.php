<?php
// BUCLE 1
for ($f = 1; $f <= 100; $f++) {
    echo $f;
}

// BUCLE 2
echo PHP_EOL;
$valor = rand(1, 100);
$inicio = 1;
while ($inicio <= $valor) {
    echo $inicio;
    $inicio++;
}

// BUCLE 3
echo PHP_EOL;
$i = 1;
do {
    $i++;
    echo "The number is " . $i . PHP_EOL;
} while($i <= 3);

// BUCLE 4
echo PHP_EOL;
$colors = array("Red", "Green", "Blue");
// Loop through colors array
foreach($colors as $value){
    echo $value . PHP_EOL;
}
?>
