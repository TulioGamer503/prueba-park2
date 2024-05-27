<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crea-j";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encriptar la contraseña

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO admin (email, nombre, password) VALUES ($email, $username, $password)");
    $stmt->bind_param("sss", $email, $username, $password);

    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
