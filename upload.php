<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Validación básica para comprobar si el archivo es válido
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "El archivo " . basename($_FILES["file"]["name"]) . " ha sido subido exitosamente.";
    } else {
        echo "Hubo un error al subir tu archivo.";
    }

    // Redirigir de nuevo a la página principal
    header("Location: index.html");
    exit();
}
?>
