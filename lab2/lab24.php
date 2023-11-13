<html>
    <head>
    <title>Laboratorio 2.4</title>
    </head>
    <body>
    <?php
    // Creacion del arreglo array ("clave" => "valor")
    $personas = array ("juan"=> "Panama",
    "john" => "USA",
    "eica" => "finlandia",
    "kusanagi" => "Japon");
    // Recorrer todo el arreglo
    foreach ($personas as $persona =>$pais) {
        print "$persona es de $pais <br>";
    }
    // impresion especifica 
    echo "<br>" .$personas ["juan"];
    echo  "<br>" .$personas ["eica"]; 
    ?>     
    </body>
</html>