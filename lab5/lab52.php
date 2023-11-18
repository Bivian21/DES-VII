<?php
$max_tamano = 1048576; // 1MB en bytes
$extensiones_validas = array('jpg', 'jpeg', 'gif', 'png');
$nombreDirectorio = "archivos/";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["nombre_archivo_cliente"])) {
    if ($_FILES['nombre_archivo_cliente']['error'] === UPLOAD_ERR_OK) {
   
        if ($_FILES['nombre_archivo_cliente']['size'] <= $max_tamano) {
            $nombre_archivo = $_FILES['nombre_archivo_cliente']['name'];
            $tipo_archivo = $_FILES['nombre_archivo_cliente']['type'];
            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        
            if (in_array($extension, $extensiones_validas) && (strpos($tipo_archivo, 'image/') === 0)) {
                $nombreCompleto = $nombreDirectorio . $nombre_archivo;

                if (is_file($nombreCompleto)) {
                    $idUnico = time();
                    $nombre_archivo = $idUnico . "-" . $nombre_archivo;
                    echo "Archivo repetido, se cambiará el nombre a $nombre_archivo <br><br>";
                }

          
                move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombre_archivo);
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
            } else {
                echo "El archivo no es una imagen válida (formatos permitidos: jpg, jpeg, gif, png) <br>";
            }
        } else {
            echo "El tamaño del archivo es demasiado grande (máximo 1MB) <br>";
        }
    } else {
        echo "Error al subir el archivo. Código: {$_FILES['nombre_archivo_cliente']['error']} <br>";
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
?>