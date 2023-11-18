<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 4.3</title>
</head>
<body>
<?php

function generarArreglo() {
    $arreglo = [];
    $numeros = range(1, 100); 

   
    shuffle($numeros);
    $arreglo = array_slice($numeros, 0, 20);

    return $arreglo;
}


function encontrarElementoMayor($arreglo) {
    $mayor = $arreglo[0];
    $posicion = 0;

    for ($i = 1; $i < count($arreglo); $i++) {
        if ($arreglo[$i] > $mayor) {
            $mayor = $arreglo[$i];
            $posicion = $i;
        }
    }

    return ["posicion" => $posicion, "valor" => $mayor];
}


$miArreglo = generarArreglo();


$resultado = encontrarElementoMayor($miArreglo);


echo "Arreglo generado: " . implode(", ", $miArreglo) . "<br>";
echo "El elemento mayor es " . $resultado['valor'] . " en la posición " . $resultado['posicion'];
?>
</body>
</html>