<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <?php
    if(isset($_POST['ventas'])){
        $ventas = $_POST['ventas'];

      
        if($ventas > 80){
            echo '<img src="cara_feliz.jpg" alt="Cara feliz">';
        } elseif($ventas >= 50 && $ventas <= 79){
            echo '<img src="cara_regular.jpg" alt="Cara regular">';
        } else {
            echo '<img src="cara_triste.jpg" alt="Cara triste">';
        }
    } else {
        echo 'Ingrese un valor de ventas.';
    }
    ?>
</body>
</html>