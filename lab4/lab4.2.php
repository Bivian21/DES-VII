<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Factorial</title>
</head>
<body>
    <h2>Resultado del Factorial</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado desde el formulario
        $numero = $_POST["numero"];

        // Función para calcular el factorial
        function calcularFactorial($n) {
            if ($n === 0 || $n === 1) {
                return 1;
            } else {
                return $n * calcularFactorial($n - 1);
            }
        }

        // Calcular el factorial del número ingresado
        $factorial = calcularFactorial($numero);
        echo "<p>El factorial de $numero es: $factorial</p>";
    }
    ?>
</body>
</html>