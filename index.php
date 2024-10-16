<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host de Archivos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Host de Archivos</h1>

    <!-- Formulario para subir archivos -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Sube un archivo:</label>
        <input type="file" name="file" id="file" required>
        <input type="submit" value="Subir Archivo">
    </form>

    <h2>Archivos Disponibles</h2>
    <ul>
        <?php
        $files = scandir("uploads/");
        foreach($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li><a href='uploads/$file' download>$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
