<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'] ?? '';
    $correo   = $_POST['correo'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $mensaje  = $_POST['mensaje'] ?? '';
    if (!empty($nombre) && !empty($correo) && !empty($telefono) && !empty($mensaje)) {
        $archivo = "contactos.txt";
        $contenido = "Nombre: $nombre | Correo: $correo | Teléfono: $telefono | Mensaje: $mensaje\n";
        file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX);
        echo "<h2>Gracias $nombre, tus datos han sido guardados correctamente.</h2>";
        echo "<a href='index.html'>Volver al sitio</a>";
    } else {
        echo "<h2>Por favor completa todos los campos.</h2>";
    }
} else {
    echo "<h2>Acceso no válido.</h2>";
}
?>
