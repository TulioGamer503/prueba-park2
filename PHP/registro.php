<?php
// Conectar a la base de datos (reemplaza los valores con los de tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crea-j";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre_user = $_POST['nombre_user'];
$contrasena_user = $_POST['contrasena_user'];
$correo_user = $_POST['correo_user'];

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO `registro`(`id`, `nombre`, `email`, `contra`) 
        VALUES (NULL, '$nombre_user', '$contrasena_user', '$correo_user')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
